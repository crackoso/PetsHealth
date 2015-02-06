CREATE TABLE alergia (id BIGINT AUTO_INCREMENT, mascota_id BIGINT NOT NULL, alergia VARCHAR(50) NOT NULL, INDEX mascota_id_idx (mascota_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE enfermedad (id BIGINT AUTO_INCREMENT, mascota_id BIGINT NOT NULL, enfermedad VARCHAR(50) NOT NULL, tratamiento TEXT, fecha DATE, INDEX mascota_id_idx (mascota_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mascota (id BIGINT AUTO_INCREMENT, usuario_id BIGINT NOT NULL, nombre VARCHAR(100) NOT NULL, fechanacimiento DATE, especie VARCHAR(20), raza VARCHAR(20), tamano TINYINT, sexo TINYINT, INDEX usuario_id_idx (usuario_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario (id BIGINT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL UNIQUE, usuario VARCHAR(20) NOT NULL, password VARCHAR(40) NOT NULL, version VARCHAR(10) NOT NULL, mailing TINYINT(1) DEFAULT '1', idioma VARCHAR(15), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vacuna (id BIGINT AUTO_INCREMENT, mascota_id BIGINT NOT NULL, vacuna VARCHAR(30) NOT NULL, fechaaplicacion DATE, INDEX mascota_id_idx (mascota_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE alergia ADD CONSTRAINT alergia_mascota_id_mascota_id FOREIGN KEY (mascota_id) REFERENCES mascota(id) ON DELETE CASCADE;
ALTER TABLE enfermedad ADD CONSTRAINT enfermedad_mascota_id_mascota_id FOREIGN KEY (mascota_id) REFERENCES mascota(id) ON DELETE CASCADE;
ALTER TABLE mascota ADD CONSTRAINT mascota_usuario_id_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE;
ALTER TABLE vacuna ADD CONSTRAINT vacuna_mascota_id_mascota_id FOREIGN KEY (mascota_id) REFERENCES mascota(id) ON DELETE CASCADE;
