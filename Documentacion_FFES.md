# Documentación Módulo FFES

## Índice
1. Introducción
2. Rutas del módulo FFES
3. Controladores
4. Modelos
5. Vistas
6. Validaciones y Navegación
7. Notas de Seguridad

---

## 1. Introducción
El módulo FFES (Ficha Familiar de Estrategias Sociales) gestiona la caracterización de hogares e integrantes, servicios de primera infancia, mecanismos de protección y triaje. Está estructurado bajo el patrón MVC de Laravel, asegurando separación lógica entre modelos, vistas y controladores.

---

## 2. Rutas del módulo FFES
Las rutas se definen en `routes/webfess.php`. A continuación se describen las principales:



- **Caracterización de integrantes:**
  - `GET /caracterizacion_integrantes/{folio}/{idintegrante}` → Formulario de caracterización de integrantes (`c_caracterizacionIntegrantes`)
  - `POST /guardar_estrategias` → Guarda estrategias

- **Primera infancia:**
  - `GET /primera_infancia/{folio}/{idintegrante}` → Formulario de servicios de primera infancia (`c_caracterizacionIntegrantes_primerInfancia`)
  - `POST /guardar_primera_infancia` → Guarda datos de primera infancia

- **Mecanismos de protección:**
  - `GET /mecanismos_proteccion/{folio}/{idintegrante}` → Formulario mecanismos de protección (`c_caracterizacionIntegrantes_mecanismosProteccion`)
  - `POST /guardar_mecanismos_proteccion` → Guarda mecanismos de protección

- **Caracterización de hogar (p1-p4):**
  - `GET /caracterizacion_hogar_p{n}/{folio}/{idintegrante}` → Formulario de caracterización de hogar por parte (`c_caracterizacion_hogar_p{n}`)
  - `POST /guardar_caracterizacion_hogar_p{n}` → Guarda datos de caracterización de hogar
  - `GET /obtener_integrantes_menores{_p{n}}/{folio}` → Obtiene integrantes menores para cada parte

- **Rutas de prueba:**
  - `/test_*` → Redireccionan a formularios con parámetros encriptados (Hashids)

---

## 3. Controladores
Ubicados en `app/Http/Controllers/ffes/`.

### 3.1. c_caracterizacionIntegrantes.php
- Gestiona la lógica para el formulario principal de caracterización de integrantes.
- Métodos:
  - `fc_caracterizacionIntegrantes`: Carga datos del integrante, muestra la vista principal, controla navegación.
  - `fc_guardar_estrategias`: Valida y guarda estrategias seleccionadas.

### 3.2. c_caracterizacionIntegrantes_primerInfancia.php
- Controla la lógica para servicios de primera infancia.
- Métodos:
  - `fc_primeraInfancia`: Obtiene datos, valida edad (<6 años) y nivel educativo, prepara la vista. Si no cumple, deshabilita formulario o redirige.
  - `fc_guardar_primeraInfancia`: Valida y guarda datos; si no cumple condiciones, guarda valor 0.

### 3.3. c_caracterizacionIntegrantes_mecanismosProteccion.php
- Controla lógica para mecanismos de protección.
- Métodos:
  - `fc_mecanismosProteccion`: Valida edad (>5 y <18 años), prepara datos y vista.
  - `fc_guardar_mecanismosProteccion`: Valida y guarda datos del formulario.

### 3.4. c_caracterizacion_hogar_p1.php, c_caracterizacion_hogar_p2.php, c_caracterizacion_hogar_p3.php, c_caracterizacion_hogar_p4.php
- Controlan la lógica de caracterización de hogar por partes.
- Métodos comunes:
  - `fc_caracterizacion_hogar_p{n}`: Muestra formulario de la parte correspondiente.
  - `fc_guardar_caracterizacion_hogar_p{n}`: Guarda datos del formulario.
  - `fc_obtener_integrantes_menores`: Obtiene integrantes menores según criterios de la parte.

### 3.5. Otros controladores
- `c_integrantesffes.php`: Gestión de integrantes FFES.
- `c_triaje_hogar.php`, `c_triaje_p1_p2.php`: Controladores de triaje.

---

## 4. Modelos
Ubicados en `app/Models/ffes/`.

### 4.1. m_caracterizacionIntegrante_primeraInfancia.php
- Modelo para datos de primera infancia.
- Define estructura y relaciones para almacenar y consultar datos de servicios de primera infancia.

### 4.2. m_caracterizacionIntegrante_mecanismosProteccion.php
- Modelo para mecanismos de protección.
- Relaciona integrantes con mecanismos de protección aplicados.

### 4.3. m_caracterizacionIntegrante_estrategia.php
- Modelo para estrategias seleccionadas por integrante.

### 4.4. m_caracterizacion_hogar_p1.php, m_caracterizacion_hogar_p2.php, m_caracterizacion_hogar_p3.php, m_caracterizacion_hogar_p4.php
- Modelos para cada parte de la caracterización de hogar.
- Gestionan la estructura y relaciones de los datos capturados en cada sección.


---

## 5. Vistas
Ubicadas en `resources/views/ffes/`.

### 5.1. v_caracterizacionIntegrantes.blade.php
- Vista principal para caracterización de integrantes.
- Incluye pestañas para navegar a Primera Infancia y Mecanismos de Protección.
- Integra validaciones de edad para navegación.

### 5.2. v_caracterizacionIntegrantes_primeraInfancia.blade.php
- Formulario de servicios de primera infancia.
- Solo habilitado para menores de 6 años y nivel educativo específico.
- Si no cumple condiciones, muestra mensaje y deshabilita campos.
- Usa SweetAlert para alertas.

### 5.3. v_caracterizacionIntegrantes_mecanismosProteccion.blade.php
- Formulario para mecanismos de protección.
- Solo accesible para personas entre 6 y 17 años.
- Muestra advertencia si no cumple rango de edad.

### 5.4. v_caracterizacion_hogar_p1.blade.php, v_caracterizacion_hogar_p2.blade.php, v_caracterizacion_hogar_p3.blade.php, v_caracterizacion_hogar_p4.blade.php
- Formularios para cada parte de la caracterización de hogar.
- Cada uno recoge información específica de la sección correspondiente.

### 5.5. v_caracterizacionhogar.blade.php
- Vista general para caracterización de hogar.

### 5.6. v_integrantesffes.blade.php
- Vista para gestión de integrantes FFES.

### 5.7. v_triaje_p1_p2.blade.php
- Formulario de triaje para partes 1 y 2.

---

## 6. Validaciones y Navegación
- Validaciones de edad y nivel educativo implementadas en controladores y vistas.
- Navegación entre formularios mediante pestañas y funciones JavaScript.
- Uso de SweetAlert para mostrar mensajes de alerta inmediatos.
- Restricciones:
  - Primera Infancia: solo menores de 6 años.
  - Mecanismos de Protección: mayores de 5 y menores de 18 años.

---

## 7. Notas de Seguridad
- Protección CSRF en todos los formularios.
- Uso de Hashids para encriptar identificadores en rutas.
- Separación estricta entre lógica de acceso a datos (controladores) y presentación (vistas).

---

**Esta documentación cubre toda la estructura, lógica y flujo de datos del módulo FFES, facilitando su comprensión y mantenimiento.**
**Profesional de Desarrollo Encargado: Alexander Muñoz Castro**
