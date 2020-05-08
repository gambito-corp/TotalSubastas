-- DATABASE: TOTAL SUBASTAS
CREATE DATABASE totalsubastas
  WITH
    OWNER = postgres
ENCODING = 'UTF8'
    LC_COLLATE = 'en_US.UTF-8'
    LC_CTYPE = 'en_US.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

-- SCHEMA APP
CREATE SCHEMA app AUTHORIZATION postgres;
COMMENT ON SCHEMA app IS 'app public schema';
GRANT ALL ON SCHEMA public TO postgres;

-- SCHEMA: PERSON
CREATE SCHEMA person AUTHORIZATION postgres;
COMMENT ON SCHEMA person IS 'person public schema';
GRANT ALL ON SCHEMA public TO postgres;

-- SCHEMA UBIGEO
CREATE SCHEMA ubigeo AUTHORIZATION postgres;
COMMENT ON SCHEMA ubigeo IS 'ubigeo public schema';
GRANT ALL ON SCHEMA public TO postgres;

-- SCHEMA AUDITORIA
CREATE SCHEMA auditoria AUTHORIZATION postgres;
COMMENT ON SCHEMA auditoria IS 'auditoria public schema';
GRANT ALL ON SCHEMA public TO postgres;

-- SCHEMA SUBASTAS
CREATE SCHEMA subasta AUTHORIZATION postgres;
COMMENT ON SCHEMA subasta IS 'subasta public schema';
GRANT ALL ON SCHEMA public TO postgres;

-- TABLES BY UBIGEO
CREATE TABLE ubigeo.pais
(
  id SMALLSERIAL NOT NULL,
  code CHAR(3) NULL,
  nombre VARCHAR(150) NULL,
  CONSTRAINT pk_ubigeo_pais PRIMARY KEY(id)
);

CREATE TABLE ubigeo.departamento
(
  id SMALLSERIAL NOT NULL,
  code CHAR(2) NULL,
  nombre VARCHAR(150) NULL,
  CONSTRAINT pk_ubigeo_departamento PRIMARY KEY(id)
);

CREATE TABLE ubigeo.provincia
(
  id SMALLSERIAL NOT NULL,
  code CHAR(4) NULL,
  departamento_id SMALLINT NULL,
  nombre VARCHAR(150) NULL,
  CONSTRAINT pk_ubigeo_provincia PRIMARY KEY(id),
  CONSTRAINT fk_ubigeo_provincia_departamento
    FOREIGN KEY(departamento_id)
    REFERENCES ubigeo.departamento(id)
);

CREATE TABLE ubigeo.distrito
(
  id SMALLSERIAL NOT NULL,
  code CHAR(6) NULL,
  provincia_id SMALLINT NULL,
  nombre VARCHAR(150) NULL,
  CONSTRAINT pk_ubigeo_distrito PRIMARY KEY(id),
  CONSTRAINT fk_ubigeo_distrito_provincia
    FOREIGN KEY(provincia_id)
    REFERENCES ubigeo.provincia(id)
);

-- TABLES BY PERSON
CREATE TYPE person.sexo AS ENUM
('M', 'F');

CREATE TABLE person.tipo
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  CONSTRAINT pk_person_tipo PRIMARY KEY(id)
);

CREATE TABLE person.tipo_contribuyente
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  CONSTRAINT pk_person_tipo_contribuyente PRIMARY KEY(id)
);

CREATE TABLE person.tipo_documento
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  nombre_corto VARCHAR(50) NOT NULL,
  longitud SMALLINT NOT NULL,
  tipo_ingreso VARCHAR(1) NOT NULL,
  tipo_contribuyente_id SMALLINT NOT NULL,
  tipo_longitud VARCHAR(1) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_tipo_documento PRIMARY KEY(id)
);

CREATE TABLE person.estado_civil
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  CONSTRAINT pk_person_estado_civil PRIMARY KEY(id)
);

CREATE TABLE person.banco
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_banco PRIMARY KEY(id)
);

CREATE TABLE person.natural
(
  id BIGSERIAL NOT NULL,
  code VARCHAR(10) NOT NULL,
  nombres VARCHAR(150) NOT NULL,
  apellidos VARCHAR(150) NOT NULL,
  tipo_documento_id SMALLINT DEFAULT 1,
  documento_number VARCHAR(30) NULL,
  documento_digito VARCHAR(3) NULL,
  pais_id SMALLINT NULL,
  departamento_id SMALLINT NULL,
  provincia_id SMALLINT NULL,
  distrito_id SMALLINT NULL,
  sexo person.sexo NULL,
  estado_civil_id SMALLINT NULL,
  banco_id SMALLINT NULL,
  numero_cuenta VARCHAR(50) NULL,
  birthday_at TIMESTAMP NULL,
  celular VARCHAR(30) NULL,
  email VARCHAR(150) NULL,
  imagen_rostro VARCHAR(150) NULL,
  imagen_documento_delante VARCHAR(150) NULL,
  imagen_documento_atras VARCHAR(150) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_natural PRIMARY KEY(id),
  CONSTRAINT uk_person_natural_code UNIQUE(code),
  CONSTRAINT fk_person_natural_tipo_documento
    FOREIGN KEY(tipo_documento_id)
    REFERENCES person.tipo_documento(id),
  CONSTRAINT fk_person_natural_pais
    FOREIGN KEY(pais_id)
    REFERENCES ubigeo.pais(id),
  CONSTRAINT fk_person_natural_departamento
    FOREIGN KEY(departamento_id)
    REFERENCES ubigeo.departamento(id),
  CONSTRAINT fk_person_natural_provincia
    FOREIGN KEY(provincia_id)
    REFERENCES ubigeo.provincia(id),
  CONSTRAINT fk_person_natural_distrito
    FOREIGN KEY(distrito_id)
    REFERENCES ubigeo.distrito(id),
  CONSTRAINT fk_person_natural_estado_civil
    FOREIGN KEY(estado_civil_id)
    REFERENCES person.estado_civil(id),
  CONSTRAINT fk_person_natural_banco
    FOREIGN KEY(banco_id)
    REFERENCES person.banco(id)
);

CREATE TABLE person.juridica
(
  id BIGSERIAL NOT NULL,
  code VARCHAR(10) NOT NULL,
  person_id SMALLINT NOT NULL,
  nombres VARCHAR(250) NOT NULL,
  razon_social VARCHAR(250) NOT NULL,
  ruc VARCHAR(30) NOT NULL,
  numero_cuenta VARCHAR(50) NOT NULL,
  telefono VARCHAR(50) NOT NULL,
  direccion VARCHAR(250) NOT NULL,
  direccion_facturacion VARCHAR(250) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_juridica PRIMARY KEY(id),
  CONSTRAINT uk_person_juridica_code UNIQUE(code),
  CONSTRAINT fk_person_juridica_natural
    FOREIGN KEY(person_id)
    REFERENCES person.natural(id)
);

CREATE TABLE person.compania
(
  id BIGSERIAL NOT NULL,
  code VARCHAR(10) NOT NULL,
  nombres VARCHAR(250) NOT NULL,
  razon_social VARCHAR(250) NOT NULL,
  ruc VARCHAR(30) NOT NULL,
  telefono VARCHAR(50) NOT NULL,
  direccion VARCHAR(250) NOT NULL,
  email VARCHAR(250) NULL,
  informacion TEXT NULL,
  imagen VARCHAR(250) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_compania PRIMARY KEY(id),
  CONSTRAINT uk_person_compania_code UNIQUE(code)
);

CREATE TABLE person.almacen
(
  id BIGSERIAL NOT NULL,
  compania_id BIGINT NOT NULL,
  turnos_visita VARCHAR(150) NULL,
  contacto_visita VARCHAR(150) NULL,
  direccion VARCHAR(250) NULL,
  telefono VARCHAR(50) NULL,
  informacion TEXT NULL,
  max_personas SMALLINT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_person_almacen PRIMARY KEY(id),
  CONSTRAINT fk_person_almacen_compania
    FOREIGN KEY(compania_id)
    REFERENCES person.compania(id)
);

-- TABLES BY APP
CREATE TYPE app.uso AS ENUM
('P', 'C');

CREATE TABLE app.tipo_ingreso
(
  code VARCHAR(1) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  valor VARCHAR(50) NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_app_tipo_ingreso PRIMARY KEY(code)
);

CREATE TABLE app.tipo_longitud
(
  code VARCHAR(1) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  CONSTRAINT pk_app_tipo_longitud PRIMARY KEY(code)
);

CREATE TABLE app.role
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  CONSTRAINT pk_app_role PRIMARY KEY(id)
);

CREATE TABLE app.terminos
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  link VARCHAR(250) NOT NULL,
  CONSTRAINT pk_app_terminos PRIMARY KEY(id)
);

CREATE TABLE app.tipo_login
(
  code VARCHAR(1) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_app_tipo_login PRIMARY KEY(code)
);

CREATE EXTENSION pgcrypto;

CREATE TABLE app.usuario
(
  id BIGSERIAL NOT NULL,
  person_id SMALLINT NOT NULL,
  role_id SMALLINT NOT NULL,
  tipo_login_code CHAR(1) NOT NULL,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  imagen_profile VARCHAR(150) NOT NULL,
  rating NUMERIC(2,1) DEFAULT 3.0,
  celular_verified BOOLEAN DEFAULT FALSE,
  email_verified BOOLEAN DEFAULT FALSE,
  uso_portal app.uso DEFAULT 'P',
  first_accessed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  last_accessed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_app_usuario PRIMARY KEY(id),
  CONSTRAINT uk_app_usuario_username UNIQUE(username),
  CONSTRAINT fk_app_usuario_tipo_login
    FOREIGN KEY(tipo_login_code)
    REFERENCES app.tipo_login(code),
  CONSTRAINT fk_app_usuario_persona
    FOREIGN KEY(person_id)
    REFERENCES person.natural(id),
  CONSTRAINT fk_app_role
    FOREIGN KEY(role_id)
    REFERENCES app.role(id)
);

CREATE TABLE app.usuario_terminos
(
  usuario_id BIGINT NOT NULL,
  terminos_id SMALLINT NOT NULL,
  CONSTRAINT fk_app_usuario_terminos_usuario
    FOREIGN KEY(usuario_id)
    REFERENCES app.usuario(id),
  CONSTRAINT fk_app_usuario_terminos_terminos
    FOREIGN KEY(terminos_id)
    REFERENCES app.terminos(id)
);

CREATE TABLE app.refresh_token
(
  username VARCHAR(100) NOT NULL,
  refresh_token VARCHAR(512) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  expired_at TIMESTAMP NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT fk_app_refresh_token_usuario
    FOREIGN KEY(username)
    REFERENCES app.usuario(username)
);

CREATE TABLE app.refresh_password
(
  username VARCHAR(100) NOT NULL,
  code VARCHAR(4) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  expired_at TIMESTAMP NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT fk_app_refresh_password_usuario
    FOREIGN KEY(username)
    REFERENCES app.usuario(username)
);

CREATE TABLE app.register_code
(
  email VARCHAR(150) NOT NULL,
  celular VARCHAR(30) NOT NULL,
  documento VARCHAR(30) NOT NULL,
  code VARCHAR(4) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  expired_at TIMESTAMP NOT NULL,
  status BOOLEAN DEFAULT TRUE
);

-- TABLES BY AUDITORIA
CREATE TABLE auditoria.log_ingresos
(
  accessed_at TIMESTAMP NOT NULL,
  usuario_id BIGINT NOT NULL,
  token_login VARCHAR(512) NULL,
  ip_login VARCHAR(30) NULL,
  dispositivo_tipo VARCHAR(100) NULL,
  dispositivo_so VARCHAR(250) NULL,
  dispositivo_browser VARCHAR(250) NULL,
  version VARCHAR(10) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLES BY SUBASTA
CREATE TABLE subasta.tipo
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  CONSTRAINT pk_subasta_tipo PRIMARY KEY(id)
);

CREATE TABLE subasta.categoria
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_categoria PRIMARY KEY(id)
);

CREATE TABLE subasta.sub_categoria
(
  id SMALLSERIAL NOT NULL,
  categoria_id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_sub_categoria PRIMARY KEY(id),
  CONSTRAINT fk_subasta_sub_categoria_categoria
    FOREIGN KEY(categoria_id)
    REFERENCES subasta.categoria(id)
);

CREATE TABLE subasta.vehiculo_marca
(
  id SMALLSERIAL NOT NULL,
  code VARCHAR(30) NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_vehiculo_marca PRIMARY KEY(id)
);

CREATE TABLE subasta.vehiculo_marca_modelo
(
  marca VARCHAR(150) NOT NULL,
  modelo VARCHAR(250) NOT NULL,
  estilo VARCHAR(250) NOT NULL
);

CREATE TABLE subasta.vehiculo_modelo
(
  id SMALLSERIAL NOT NULL,
  marca_id SMALLINT NOT NULL,
  modelo VARCHAR(250) NOT NULL,
  estilo VARCHAR(250) NOT NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_vehiculo_modelo PRIMARY KEY(id),
  CONSTRAINT fk_subasta_vehiculo_modelo_marca
    FOREIGN KEY(marca_id)
    REFERENCES subasta.vehiculo_marca(id)
);

CREATE TABLE subasta.vehiculo_lote
(
  id BIGSERIAL NOT NULL,
  descripcion TEXT NULL,
  subasta_at TIMESTAMP NOT NULL,
  compania_id BIGINT NOT NULL,
  ciudad_id SMALLINT NOT NULL,
  started_at TIMESTAMP NOT NULL,
  finalized_at TIMESTAMP NOT NULL,
  live_at TIMESTAMP NOT NULL,
  max_vehiculos SMALLINT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_vehiculo_lote PRIMARY KEY(id),
  CONSTRAINT fk_subasta_vehiculo_lote_compania
    FOREIGN KEY(compania_id)
    REFERENCES person.compania(id),
  CONSTRAINT fk_subasta_vehiculo_lote_ciudad
    FOREIGN KEY(ciudad_id)
    REFERENCES ubigeo.distrito(id)
);

CREATE TABLE subasta.vehiculo
(
  id BIGSERIAL NOT NULL,
  lote_id BIGINT NOT NULL,
  compania_id BIGINT NOT NULL,
  anio SMALLINT NOT NULL,
  nombres VARCHAR(150) NOT NULL,
  precio_base NUMERIC(10,2) NOT NULL,
  precio_reserva NUMERIC(10,2) DEFAULT 0,
  garantia NUMERIC(10,2) NOT NULL,
  comision SMALLINT DEFAULT 0,
  marca_id SMALLINT NOT NULL,
  modelo_id SMALLINT NOT NULL,
  placa VARCHAR(10) NOT NULL,
  color VARCHAR(30) NOT NULL,
  version VARCHAR(50) NOT NULL,
  timon VARCHAR(50) NOT NULL,
  asientos SMALLINT NOT NULL,
  estado_vehiculo VARCHAR(50) NOT NULL,
  tipo_subasta_id SMALLINT NOT NULL,
  ficha_tecnica VARCHAR(250) NULL,
  informacion TEXT NULL,
  direccion VARCHAR(250) NOT NULL,
  video VARCHAR(250) NULL,
  valor_interno_activo NUMERIC(10,2) NOT NULL,
  saneado BOOLEAN DEFAULT FALSE,
  tiene_captura BOOLEAN DEFAULT FALSE,
  tiene_seguro BOOLEAN DEFAULT FALSE,
  tiene_soat BOOLEAN DEFAULT FALSE,
  tiene_rev_tecnica BOOLEAN DEFAULT FALSE,
  terminos VARCHAR(250) NULL,
  started_at TIME NOT NULL,
  finalized_at TIMESTAMP NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_vehiculo PRIMARY KEY(id),
  CONSTRAINT fk_subasta_vehiculo_lote
    FOREIGN KEY(lote_id)
    REFERENCES subasta.vehiculo_lote(id),
  CONSTRAINT fk_subasta_compania
    FOREIGN KEY(compania_id)
    REFERENCES person.compania(id),
  CONSTRAINT fk_subasta_vehiculo_marca
    FOREIGN KEY(marca_id)
    REFERENCES subasta.vehiculo_marca(id),
  CONSTRAINT fk_subasta_vehiculo_modelo
    FOREIGN KEY(modelo_id)
    REFERENCES subasta.vehiculo_modelo(id),
  CONSTRAINT fk_subasta_vehiculo_tipo_subasta
    FOREIGN KEY(tipo_subasta_id)
    REFERENCES subasta.tipo(id)
);

CREATE TABLE subasta.vehiculo_detalle
(
  vehiculo_id BIGINT NOT NULL,
  -- MOTOR
  combustible VARCHAR(30) NULL,
  traccion VARCHAR(30) NULL,
  direccion VARCHAR(30) NULL,
  torque VARCHAR(30) NULL,
  potencia VARCHAR(30) NULL,
  nro_cilindros SMALLINT NULL,
  cilindrada VARCHAR(30) NULL,
  -- TRANSMISION
  velocidades VARCHAR(30) NULL,
  tipo_trans VARCHAR(30) NULL,
  puertas SMALLINT NULL,
  freno_delan VARCHAR(30) NULL,
  freno_poste VARCHAR(30) NULL,
  tipo_freno VARCHAR(30) NULL,
  -- SONIDO
  am_fm CHAR(2) NULL,
  cd BOOLEAN DEFAULT FALSE,
  tarjeta_sd BOOLEAN DEFAULT FALSE,
  ent_aux BOOLEAN DEFAULT FALSE,
  ent_usb BOOLEAN DEFAULT FALSE,
  bluetooth BOOLEAN DEFAULT FALSE,
  -- OTROS
  tipo_neumatico VARCHAR(30) NULL,
  tapizado VARCHAR(30) NULL,
  airbag SMALLINT NULL,
  alarma BOOLEAN DEFAULT FALSE,
  aros BOOLEAN DEFAULT FALSE,
  neblineros BOOLEAN DEFAULT FALSE,
  sistema_lunas VARCHAR(30) NULL,
  gps BOOLEAN DEFAULT FALSE,
  sensores_estac BOOLEAN DEFAULT FALSE,
  CONSTRAINT fk_pk_subasta_vehiculo_detalle_vehiculo
    FOREIGN KEY(vehiculo_id)
    REFERENCES subasta.vehiculo(id)
);

CREATE TABLE subasta.vehiculo_documentos
(
  id BIGSERIAL NOT NULL,
  vehiculo_id BIGINT NOT NULL,
  documento VARCHAR(250) NOT NULL,
  CONSTRAINT pk_subasta_vehiculo_documento PRIMARY KEY(id),
  CONSTRAINT fk_pk_subasta_vehiculo_documento_vehiculo
    FOREIGN KEY(vehiculo_id)
    REFERENCES subasta.vehiculo(id)
);

CREATE TABLE subasta.vehiculo_imagenes
(
  id BIGSERIAL NOT NULL,
  vehiculo_id BIGINT NOT NULL,
  imagen VARCHAR(250) NOT NULL,
  is_default BOOLEAN DEFAULT TRUE,
  CONSTRAINT pk_subasta_vehiculo_imagenes PRIMARY KEY(id),
  CONSTRAINT fk_pk_subasta_vehiculo_imagenes_vehiculo
    FOREIGN KEY(vehiculo_id)
    REFERENCES subasta.vehiculo(id)
);

CREATE TABLE subasta.estado
(
  id SMALLSERIAL NOT NULL,
  nombre VARCHAR(150) NOT NULL,
  CONSTRAINT pk_subasta_estado PRIMARY KEY(id)
);

CREATE TABLE subasta.vehiculo_subasta
(
  id BIGSERIAL NOT NULL,
  lote_id BIGINT NOT NULL,
  vehiculo_id BIGINT NOT NULL,
  precio_base NUMERIC(10,2) NOT NULL,
  precio_reserva NUMERIC(10,2) DEFAULT 0,
  precio_actual NUMERIC(10,2) DEFAULT 0,
  total_participantes SMALLINT DEFAULT 0,
  total_ofertas SMALLINT DEFAULT 0,
  total_visitas SMALLINT DEFAULT 0,
  started_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  finalized_at TIMESTAMP NULL,
  estado_id SMALLINT DEFAULT 1,
  CONSTRAINT pk_subasta_vehiculo_subasta PRIMARY KEY(id),
  CONSTRAINT fk_subasta_vehiculo_subasta_lote
    FOREIGN KEY(lote_id)
    REFERENCES subasta.vehiculo_lote(id),
  CONSTRAINT fk_subasta_vehiculo_subasta_vehiculo
    FOREIGN KEY(vehiculo_id)
    REFERENCES subasta.vehiculo(id),
  CONSTRAINT fk_subasta_vehichulo_subasta_estado
    FOREIGN KEY(estado_id)
    REFERENCES subasta.estado(id)
);

CREATE TABLE subasta.vehiculo_subasta_detalle
(
  subasta_id BIGSERIAL NOT NULL,
  usuario_id BIGINT NOT NULL,
  is_offline BOOLEAN DEFAULT FALSE,
  puja_at TIMESTAMP NULL,
  monto NUMERIC(10,2) NULL,
  ip VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status BOOLEAN DEFAULT TRUE,
  CONSTRAINT fk_vehiculo_subasta_detalle_usuario
    FOREIGN KEY(usuario_id)
    REFERENCES app.usuario(id),
  CONSTRAINT fk_vehiculo_subasta_detalle_subasta
    FOREIGN KEY(subasta_id)
    REFERENCES subasta.vehiculo_subasta(id)
);

CREATE TABLE subasta.vehiculo_visita
(
  vehiculo_id BIGINT NOT NULL,
  usuario_id BIGINT NOT NULL,
  visita_at TIMESTAMP NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status BOOLEAN DEFAULT TRUE,
  total_visitas SMALLINT NULL,
  CONSTRAINT pk_subasta_vehiculo_visita PRIMARY KEY(vehiculo_id,usuario_id)
);

CREATE TABLE subasta.vehiculo_danios
(
  id BIGSERIAL NOT NULL,
  vehiculo_id BIGINT NOT NULL,
  imagen VARCHAR(250) NOT NULL,
  titulo VARCHAR(100) NOT NULL,
  descripcion VARCHAR(250) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT pk_subasta_vehiculo_danios PRIMARY KEY(id),
  CONSTRAINT fk_pk_subasta_vehiculo_danios_vehiculo
    FOREIGN KEY(vehiculo_id)
    REFERENCES subasta.vehiculo(id)
);

CREATE TABLE app.balance
(
  id BIGSERIAL NOT NULL,
  usuario_id BIGINT NOT NULL,
  monto NUMERIC(10,2) NULL,
  tipo VARCHAR(10) NOT NULL,
  descripcion VARCHAR(250) NULL,
  fecha_abono TIMESTAMP NULL,
  documento VARCHAR(250) NOT NULL,
  motivo VARCHAR(50) NOT NULL,
  banco VARCHAR(50) NOT NULL,
  cuenta VARCHAR(50) NOT NULL,
  transaccion_banco VARCHAR(50) NOT NULL,
  id_transaccion_asociada BIGINT NULL,
  status BOOLEAN DEFAULT TRUE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT fk_balance_usuario FOREIGN KEY (usuario_id)
        REFERENCES app.usuario (id)
);


CREATE TABLE subasta.titulos	
(
id bigint NOT NULL,
descripcion  VARCHAR(100) NOT NULL
);

alter table subasta.titulos
 add constraint PK_titulos
 primary key(id);

CREATE TABLE subasta.vehiculo_terminos
(
  id BIGSERIAL NOT NULL,
  vehiculo_id bigint NOT NULL,
  titulo_id bigint NOT NULL,
	contenido VARCHAR(250) NOT NULL,
	created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp without time zone,
	CONSTRAINT pk_subasta_vehiculo_terminos PRIMARY KEY(id),
	 CONSTRAINT fk_subasta_vehiculo_terminos_vehiculo FOREIGN KEY(vehiculo_id)
        REFERENCES subasta.vehiculo(id),
	CONSTRAINT fk_subasta_vehiculo_terminos_titulo FOREIGN KEY(titulo_id)
        REFERENCES subasta.titulos(id)

	);
