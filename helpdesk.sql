/*
 Navicat Premium Data Transfer

 Source Server         : HELPDESK.23
 Source Server Type    : MariaDB
 Source Server Version : 100604 (10.6.4-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : helpdesk

 Target Server Type    : MariaDB
 Target Server Version : 100604 (10.6.4-MariaDB)
 File Encoding         : 65001

 Date: 12/09/2023 15:22:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre_usuario` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_rol` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `clave` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email_usuario` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `departamento` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `regional` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES (1, 'Super Administrador', 'SAdministrador', '1', 'e10adc3949ba59abbe56e057f20f883e', 'Sadministrador@gmail.com', 'IT', '977925333', 1, 1);
INSERT INTO `tbl_admin` VALUES (33, 'Admin Regional TGU', 'admnTGU', '1', 'e10adc3949ba59abbe56e057f20f883e', 'admintgu@gmail.com', 'IT', '96454635', 1, 1);
INSERT INTO `tbl_admin` VALUES (34, 'Admin Regional CHOLUTECA', 'admnCho', '1', 'e10adc3949ba59abbe56e057f20f883e', 'admincho@gmail.com', 'IT', '96454635', 2, 1);
INSERT INTO `tbl_admin` VALUES (35, 'Admin Regional TELA', 'admntla', '1', 'e10adc3949ba59abbe56e057f20f883e', 'admintela@gmail.com', 'IT', '96454635', 3, 1);
INSERT INTO `tbl_admin` VALUES (36, 'Admin Regional SPS', 'admnsps', '1', 'e10adc3949ba59abbe56e057f20f883e', 'adminsps@gmail.com', 'IT', '96454635', 4, 1);
INSERT INTO `tbl_admin` VALUES (37, 'Admin Regional SRC', 'admsrc', '1', 'e10adc3949ba59abbe56e057f20f883e', 'adminsrc@gmail.com', 'IT', '96454635', 5, 1);
INSERT INTO `tbl_admin` VALUES (38, 'Tecnico TGU', 'tectgu', '2', 'e10adc3949ba59abbe56e057f20f883e', 'tecnicotgu@gmail.com', 'IT', '96454635', 1, 1);
INSERT INTO `tbl_admin` VALUES (39, 'Tecnico CHOLUTECA', 'teccho', '2', 'e10adc3949ba59abbe56e057f20f883e', 'tecnicocho@gmail.com', 'IT', '96454635', 2, 1);
INSERT INTO `tbl_admin` VALUES (40, 'Tecnico TELA', 'tectela', '2', 'e10adc3949ba59abbe56e057f20f883e', 'tecnicotela@gmail.com', 'IT', '31978325', 3, 1);
INSERT INTO `tbl_admin` VALUES (41, 'Tecnico SPS', 'tecsps', '2', 'e10adc3949ba59abbe56e057f20f883e', 'tecnicosps@gmail.com', 'IT', '96454635', 4, 1);
INSERT INTO `tbl_admin` VALUES (42, 'Tecnico SRC', 'tecnicosrc', '2', 'e10adc3949ba59abbe56e057f20f883e', 'tecnicosrc@gmail.com', 'IT', '96454635', 5, 1);

-- ----------------------------
-- Table structure for tbl_archivoespdesa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_archivoespdesa`;
CREATE TABLE `tbl_archivoespdesa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NULL DEFAULT current_timestamp(),
  `title` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `description` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `upload` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `url` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_archivoespdesa
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_archivosdes
-- ----------------------------
DROP TABLE IF EXISTS `tbl_archivosdes`;
CREATE TABLE `tbl_archivosdes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NULL DEFAULT current_timestamp(),
  `title` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `description` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `upload` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `url` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_archivosdes
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_archivosesp
-- ----------------------------
DROP TABLE IF EXISTS `tbl_archivosesp`;
CREATE TABLE `tbl_archivosesp`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `description` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `upload` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `url` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_archivosesp
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_area_solicitud
-- ----------------------------
DROP TABLE IF EXISTS `tbl_area_solicitud`;
CREATE TABLE `tbl_area_solicitud`  (
  `id_area` int(11) NOT NULL,
  `area_solicitud` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_area`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_area_solicitud
-- ----------------------------
INSERT INTO `tbl_area_solicitud` VALUES (1, 'Dir.Cecop');
INSERT INTO `tbl_area_solicitud` VALUES (2, 'Sup.General');
INSERT INTO `tbl_area_solicitud` VALUES (3, 'Call Center');
INSERT INTO `tbl_area_solicitud` VALUES (4, 'Video Proteccion');
INSERT INTO `tbl_area_solicitud` VALUES (5, 'UAFI');
INSERT INTO `tbl_area_solicitud` VALUES (6, 'Despacho');
INSERT INTO `tbl_area_solicitud` VALUES (7, 'Telemedicina');
INSERT INTO `tbl_area_solicitud` VALUES (8, 'Comunicacion');
INSERT INTO `tbl_area_solicitud` VALUES (9, 'Calidad Operativa');
INSERT INTO `tbl_area_solicitud` VALUES (10, 'Mapeo');
INSERT INTO `tbl_area_solicitud` VALUES (11, 'Auxiliar Secretaria');
INSERT INTO `tbl_area_solicitud` VALUES (12, 'Otro');

-- ----------------------------
-- Table structure for tbl_bitacoras
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bitacoras`;
CREATE TABLE `tbl_bitacoras`  (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `serie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `turnos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `departamento_ticket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regional_ticket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tecnicos_ticket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion_equipos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `problema_presentado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `solucion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado_bitacora` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_bitacora`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_bitacoras
-- ----------------------------
INSERT INTO `tbl_bitacoras` VALUES (1, '2023-09-01 09:59:36', 'BT49C1', 'A', 'Dirección Centro de Excelencia Formativa', 'Dirección Regional CECOP Tegucigalpa', 'tecnico', 'Impresora Epson Canon ADVANCE 400i', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla ', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla ', 'Finalizado');

-- ----------------------------
-- Table structure for tbl_calendario
-- ----------------------------
DROP TABLE IF EXISTS `tbl_calendario`;
CREATE TABLE `tbl_calendario`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `color_evento` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_inicio` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_fin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hora` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_usuario` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `correo` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `departamento_ticket` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `area_solicitud` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regional_ticket` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `turnos` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tecnicos_ticket` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `problema_presentado` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `serie` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado_bitacora` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_calendario
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_catalogo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_catalogo`;
CREATE TABLE `tbl_catalogo`  (
  `id_catalogo` int(11) NOT NULL,
  `problemas` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id_catalogo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_catalogo
-- ----------------------------
INSERT INTO `tbl_catalogo` VALUES (1, 'Conexión de Red');
INSERT INTO `tbl_catalogo` VALUES (2, 'Falla de Diadema  ');
INSERT INTO `tbl_catalogo` VALUES (3, 'Acceso de Usuario');
INSERT INTO `tbl_catalogo` VALUES (4, 'Saturación de Programas');
INSERT INTO `tbl_catalogo` VALUES (5, 'Préstamo de Equipo');
INSERT INTO `tbl_catalogo` VALUES (6, 'Desconfiguración de Plataforma');
INSERT INTO `tbl_catalogo` VALUES (7, 'Instalación de Sistemas');
INSERT INTO `tbl_catalogo` VALUES (8, 'Backups');
INSERT INTO `tbl_catalogo` VALUES (9, 'Problemas con el Correo');
INSERT INTO `tbl_catalogo` VALUES (10, 'Entrada de Equipo para Reparacion (Oficina)');
INSERT INTO `tbl_catalogo` VALUES (11, 'Entrada de Equipo Nuevo para Configuracion (Oficina)');
INSERT INTO `tbl_catalogo` VALUES (12, '\r\nManejo de Documentos por Red');
INSERT INTO `tbl_catalogo` VALUES (13, 'Cambio de Periféricos');
INSERT INTO `tbl_catalogo` VALUES (14, 'Reemplazo de Equipo');
INSERT INTO `tbl_catalogo` VALUES (15, 'Acceso a la red Wi-Fi');
INSERT INTO `tbl_catalogo` VALUES (16, 'Activacion De Office');
INSERT INTO `tbl_catalogo` VALUES (17, 'Problemas con Impresora');
INSERT INTO `tbl_catalogo` VALUES (18, 'Otro');

-- ----------------------------
-- Table structure for tbl_departamento
-- ----------------------------
DROP TABLE IF EXISTS `tbl_departamento`;
CREATE TABLE `tbl_departamento`  (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id_departamento`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_departamento
-- ----------------------------
INSERT INTO `tbl_departamento` VALUES (1, 'Sub Dirección Nacional');
INSERT INTO `tbl_departamento` VALUES (2, 'Auditoría Interna');
INSERT INTO `tbl_departamento` VALUES (3, 'Secretaría Sub Dirección');
INSERT INTO `tbl_departamento` VALUES (4, 'Unidad de Asuntos Internacionales');
INSERT INTO `tbl_departamento` VALUES (5, 'Secretarí­a General');
INSERT INTO `tbl_departamento` VALUES (6, 'Dirección Legal');
INSERT INTO `tbl_departamento` VALUES (7, 'Unidad de Transparencia');
INSERT INTO `tbl_departamento` VALUES (8, 'Gerencia de Comunicaciones');
INSERT INTO `tbl_departamento` VALUES (9, 'Dirección Centro de Excelencia Formativa');
INSERT INTO `tbl_departamento` VALUES (10, 'Gerencia de Tecnología');
INSERT INTO `tbl_departamento` VALUES (11, 'Gerencia Administrativa');
INSERT INTO `tbl_departamento` VALUES (12, 'Gerencia de Recursos Humanos');
INSERT INTO `tbl_departamento` VALUES (13, 'Dirección General de CECOP');
INSERT INTO `tbl_departamento` VALUES (14, 'Gerencia de Planificación');
INSERT INTO `tbl_departamento` VALUES (15, 'Gerencia de Proyectos');

-- ----------------------------
-- Table structure for tbl_desarrollo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_desarrollo`;
CREATE TABLE `tbl_desarrollo`  (
  `id_desarrollo` int(11) NOT NULL,
  `desarrollo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_desarrollo
-- ----------------------------
INSERT INTO `tbl_desarrollo` VALUES (1, 'SIGEP');
INSERT INTO `tbl_desarrollo` VALUES (2, 'SIGEM');
INSERT INTO `tbl_desarrollo` VALUES (3, 'ASCLEPIO');
INSERT INTO `tbl_desarrollo` VALUES (4, 'Mesa de Ayuda');
INSERT INTO `tbl_desarrollo` VALUES (5, 'Fallo de PBX');
INSERT INTO `tbl_desarrollo` VALUES (6, 'Mapa De Calor');
INSERT INTO `tbl_desarrollo` VALUES (7, 'Metabase');
INSERT INTO `tbl_desarrollo` VALUES (8, 'Otros');

-- ----------------------------
-- Table structure for tbl_descripcion
-- ----------------------------
DROP TABLE IF EXISTS `tbl_descripcion`;
CREATE TABLE `tbl_descripcion`  (
  `id_equipos` int(11) NOT NULL,
  `descripcion_equipos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_equipos`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_descripcion
-- ----------------------------
INSERT INTO `tbl_descripcion` VALUES (1, 'DELL Optiplex 7040');
INSERT INTO `tbl_descripcion` VALUES (2, 'DELL Optiplex 3020');
INSERT INTO `tbl_descripcion` VALUES (3, 'DELL Optiplex 5055');
INSERT INTO `tbl_descripcion` VALUES (4, 'DELL Precision Tower 7810');
INSERT INTO `tbl_descripcion` VALUES (5, 'Impresora Epson L575');
INSERT INTO `tbl_descripcion` VALUES (6, 'Impresora Epson Canon ADVANCE 400i');
INSERT INTO `tbl_descripcion` VALUES (7, 'Monitor');
INSERT INTO `tbl_descripcion` VALUES (8, 'Mouse');
INSERT INTO `tbl_descripcion` VALUES (9, 'Teclado');
INSERT INTO `tbl_descripcion` VALUES (10, 'Cable UTP');
INSERT INTO `tbl_descripcion` VALUES (11, 'Vincha');
INSERT INTO `tbl_descripcion` VALUES (12, 'Televisor ');
INSERT INTO `tbl_descripcion` VALUES (13, 'Correo Zimbra');
INSERT INTO `tbl_descripcion` VALUES (14, 'Mac Apple');
INSERT INTO `tbl_descripcion` VALUES (15, 'Switch');
INSERT INTO `tbl_descripcion` VALUES (16, 'Portatil Zbook');
INSERT INTO `tbl_descripcion` VALUES (17, 'Ultra IP');
INSERT INTO `tbl_descripcion` VALUES (18, 'Otros');

-- ----------------------------
-- Table structure for tbl_dictamen
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dictamen`;
CREATE TABLE `tbl_dictamen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NULL DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `upload` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_dictamen
-- ----------------------------
INSERT INTO `tbl_dictamen` VALUES (1, '2023-09-07 14:13:45', 'DICTAMEN PRUEBA WORD', 'DICTAMEN PRUEBA WORD', 'Super Administrador', 'filesReportes/NAVICAT.docx');

-- ----------------------------
-- Table structure for tbl_edificio
-- ----------------------------
DROP TABLE IF EXISTS `tbl_edificio`;
CREATE TABLE `tbl_edificio`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edificio` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_edificio
-- ----------------------------
INSERT INTO `tbl_edificio` VALUES (1, 'Administrativo');
INSERT INTO `tbl_edificio` VALUES (2, 'Operativo');

-- ----------------------------
-- Table structure for tbl_equipo_entrada
-- ----------------------------
DROP TABLE IF EXISTS `tbl_equipo_entrada`;
CREATE TABLE `tbl_equipo_entrada`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` datetime NULL DEFAULT NULL,
  `edificio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `departamento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tecnico` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `equipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `memoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `disco` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `procesador` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `service` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inventario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adicionales` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diagnostico` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `solucion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `requerimiento` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `observaciones` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lugar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_entrega` date NULL DEFAULT NULL,
  `hora` time NULL DEFAULT NULL,
  `estado_informe` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_equipo_entrada
-- ----------------------------
INSERT INTO `tbl_equipo_entrada` VALUES (1, 'SL44EN1', '2023-09-01 09:55:00', 'Administrativo', 'Dirección Centro de Excelencia Formativa', 'Edwin Aron Martinez', 'Usuario Prueba', 'Dell Workstation Presicion 7810', 'DRR2-12GB', 'Estado Solido/320GB', 'i5', 'DKSGRPT', 'INV3507', 'Mouse Y Teclado', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla monitor no se encuentra e', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla monitor no se encuentra e', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla monitor no se encuentra e', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla monitor no se encuentra e', 'Departamento IT', '2023-09-01', '09:58:32', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (2, 'SL50EN2', '2023-09-01 15:53:55', 'Administrativo', 'Sub Dirección Nacional', 'Edwin Aron Martinez', 'Usuario Prueba', 'Dell Workstation Presicion 7810', '', 'Estado Solido/320GB', '', '', '', '', 'Se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo.', 'Departamento IT', '2023-09-01', '15:55:06', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (3, 'SL99EN3', '2023-09-01 15:55:43', 'Administrativo', 'Unidad de Asuntos Internacionales', 'Edwin Aron Martinez', '', 'Dell Workstation Presicion 7810', '', '', 'i5', 'DKSGRPT', '', '', 'Se hizo el diagnostico de prueba de salida de equipo se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo se hizo el diagnostico de prueba de salida de equipo.', 'Se hizo el diagnostico de prueba de salida de equipo se hizo el diagnostico de prueba de salida de equipo.', 'Departamento Del Equipo', '2023-09-01', '15:56:37', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (4, 'SL81EN4', '2023-09-05 11:15:27', 'Administrativo', 'Unidad de Transparencia', 'Eduardo Flores', 'Oscar Ramos', '', '', '', '', '', '02590', 'Impresora Epson L575', 'Error 0xEA, problemas de cabezal atascado. ', 'Se alineo manualmente el cabezal y se realizó mantenimiento, mediante software.  ', '', '', 'Departamento Del Equipo', '2023-09-05', '11:18:26', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (5, 'SL01EN5', '2023-09-06 12:32:55', 'Operativo', 'Otros', 'anderson marquez', 'estacion 44', 'dell  optiplex 7040', '', '', '', '', '', '', 'problemas en la carpeta compartida', 'reactivación de carpeta compartida ', '', '', 'Departamento Del Equipo', '2023-09-06', '12:38:08', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (6, 'SL11EN6', '2023-09-08 10:31:20', 'Administrativo', 'Dirección Legal', 'anderson marquez', '', '', '', '', '', '', '', '', 'instalación de impresora', 'se instalo impresora que ya estaba en el departamento legal que estaba sin uso ', '', '', 'Departamento IT', '2023-09-08', '10:34:32', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (7, 'SL03EN7', '2023-09-08 10:42:49', 'Operativo', 'Secretarí­a General', 'anderson marquez', '', '', '', '', '', '', '', '', 'configuración de impresora', 'instalación de impresora ', '', '', 'Departamento IT', '2023-09-08', '10:46:26', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (8, 'SL82EN8', '2023-09-08 11:04:08', 'Administrativo', 'Otro', 'Eduardo Flores', '', '', '', '', '', '', '', 'Teléfono CISCO ', '', 'Se realizo su respectiva instalación. ', 'Solicitaron reactivar el teléfono. ', '', 'Departamento Del Equipo', '2023-09-08', '11:08:26', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (9, 'SL71EN9', '2023-09-08 11:32:10', 'Administrativo', 'Gerencia de Comunicaciones', 'Eduardo Flores', 'Francia Reyes ', 'Dell OptiPlex 7040', '4GB', '1TB', 'Intel Core i7', '3LQDNS2', '02599', '', 'Problemas de repetición para retrasar las pulsaciones de teclas, repetidas al mantener presionada una tecla. ', 'Se restableció la configuración, en Accesibilidad > Teclado > Activar Teclas de Repetición .', '', '', 'Departamento Del Equipo', '2023-09-08', '11:42:38', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (10, 'SL69EN10', '2023-09-08 15:23:47', 'Administrativo', 'Secretarí­a General', 'anderson marquez', '', '', '', '', '', '', '', '', 'desinstalación de paquetes de office e instalación nuevo de paquetes de office ', 'se le instalo un nuevo paquete de office ', '', '', 'Departamento Del Equipo', '2023-09-08', '15:25:32', 'Finalizado');
INSERT INTO `tbl_equipo_entrada` VALUES (11, 'SL44EN11', '2023-09-08 15:29:29', 'Operativo', 'Secretarí­a General', 'anderson marquez', '', '', '', '', '', '', '', '', 'desinstalación de paquete de office e instalación de office', 'se le instalo un nuevo paquetes de office ', '', '', 'Departamento Del Equipo', '2023-09-08', '15:31:58', 'Finalizado');

-- ----------------------------
-- Table structure for tbl_estado_bitacora
-- ----------------------------
DROP TABLE IF EXISTS `tbl_estado_bitacora`;
CREATE TABLE `tbl_estado_bitacora`  (
  `id_estado_bitacora` int(11) NOT NULL,
  `estado_bitacora` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_estado_bitacora`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_estado_bitacora
-- ----------------------------
INSERT INTO `tbl_estado_bitacora` VALUES (1, 'Pendiente');
INSERT INTO `tbl_estado_bitacora` VALUES (2, 'En Proceso');
INSERT INTO `tbl_estado_bitacora` VALUES (3, 'Resuelto');
INSERT INTO `tbl_estado_bitacora` VALUES (4, 'Rechazado');

-- ----------------------------
-- Table structure for tbl_estadoticket
-- ----------------------------
DROP TABLE IF EXISTS `tbl_estadoticket`;
CREATE TABLE `tbl_estadoticket`  (
  `id_ticket` int(11) NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_ticket`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_estadoticket
-- ----------------------------
INSERT INTO `tbl_estadoticket` VALUES (1, 'Pendiente');
INSERT INTO `tbl_estadoticket` VALUES (2, 'En Proceso');
INSERT INTO `tbl_estadoticket` VALUES (3, 'Resuelto');
INSERT INTO `tbl_estadoticket` VALUES (4, 'Rechazado');

-- ----------------------------
-- Table structure for tbl_informe
-- ----------------------------
DROP TABLE IF EXISTS `tbl_informe`;
CREATE TABLE `tbl_informe`  (
  `id_informe` int(11) NOT NULL AUTO_INCREMENT,
  `asunto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `serie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo_servicio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lugar_trabajo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `departamento_ticket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `antecedentes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `analisis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `recomendaciones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `conclusiones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anexos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anexos2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anexos3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_tecnico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `estado_informe` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_informe`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_informe
-- ----------------------------
INSERT INTO `tbl_informe` VALUES (1, 'Dictamen Técnico de Equipo Informático del Departamento de Dirección de Tecnología.', 'IN40F1', '2023-08-31 16:41:28', 'Dictamen Técnico.', 'Sistema Nacional De Emergencias 911, Unidad De Soporte Técnico.', 'Sub Dirección Nacional', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Miniatura2.JPG', 'Miniatura2.JPG', 'Miniatura2.JPG', 'Edwin Aron Martinez Cabrera', 'Finalizado');
INSERT INTO `tbl_informe` VALUES (2, 'Dictamen Técnico de Equipo Informático del Departamento de Dirección de Tecnología.', 'IN40F2', '2023-08-31 16:59:37', 'Dictamen Técnico.', 'Sistema Nacional De Emergencias 911, Unidad De Soporte Técnico.', 'Sub Dirección Nacional', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a ', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a ', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a ', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a ', 'Miniatura2.JPG', 'Miniatura2.JPG', 'Miniatura2.JPG', 'Edwin Aron Martinez Cabrera', 'Finalizado');
INSERT INTO `tbl_informe` VALUES (3, 'Dictamen Técnico de Equipo Informático del Departamento de Dirección de Tecnología.', 'IN69F3', '2023-09-01 09:53:08', 'Dictamen Técnico.', 'Sistema Nacional De Emergencias 911, Unidad De Soporte Técnico.', 'Sub Dirección Nacional', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Se verifico mediante el proceso de desarmar la pantalla para realizar una prueba en la que el monitor no se encuentra en las condiciones de uso, esto debido a que la pantalla sigue mostrando el mismo problema del parpadeo continuo, con lo cual se llega a', 'Miniatura.JPG', 'Miniatura.JPG', 'Miniatura.JPG', 'Edwin Aron Martinez Cabrera', 'Finalizado');

-- ----------------------------
-- Table structure for tbl_lugar
-- ----------------------------
DROP TABLE IF EXISTS `tbl_lugar`;
CREATE TABLE `tbl_lugar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar_trabajo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_lugar
-- ----------------------------
INSERT INTO `tbl_lugar` VALUES (1, 'Departamento IT');
INSERT INTO `tbl_lugar` VALUES (2, 'Departamento Del Equipo');

-- ----------------------------
-- Table structure for tbl_numeroempleado
-- ----------------------------
DROP TABLE IF EXISTS `tbl_numeroempleado`;
CREATE TABLE `tbl_numeroempleado`  (
  `Codigo` int(11) NOT NULL,
  `NombreEmpleado` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `EnUso` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_numeroempleado
-- ----------------------------
INSERT INTO `tbl_numeroempleado` VALUES (1004, 'NILIA LILIANA HERNANDEZ OSEGUERA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1005, 'BLANCA MERCEDES RIVAS DOBLADO', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1006, 'BANY DANESSY ALVARENGA PADILLA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1007, 'EVERANGER  CASTILLO CRUZ', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1008, 'ANDREA YORLIBETH AGUILERA MEJIA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1009, 'KRITZA MARBETH FUNEZ RODRIGUEZ', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1017, 'CRISTINO EDUARDO CERRATO ESPINAL', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1021, 'FRANCISCO JAVIER GUIFARRO PADILLA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1023, 'MOISES ANTONIO RODRIGUEZ DEGRANDEZ', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1025, 'JOSE ADALBERTO DIAZ ACOSTA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1028, 'YOLANDA DEL CARMEN PEREZ MOLINA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1029, 'GASBY  VILLATORO JACOME', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1031, 'LENAR NAZARETH CERRATO MIRALDA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1032, 'CRISTIAN NOEL CANALES ZAMBRANO', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1033, 'EDER JOSUE ALVARADO MORALES', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1035, 'DENIS EXZEQUIEL GARCIA GARCIA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1036, 'ISMAEL ANTONIO LOPEZ LOPEZ', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1039, 'CARLOS ROBERTO ZAPATA BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1040, 'WILMER ALEXANDER CASTILLO MOLINA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1042, 'EDWIN MIGUEL BAQUEDANO AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1044, 'ALEXA XOMAIRA AVILA FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1046, 'ALISON GABRIELA MONCADA ÁVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1050, 'ANGEL DAVID RAMOS FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1051, 'ANGÉLICA MARÍA MOLINA CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1052, 'BAYRON JOSUÉ PERDOMO CHÁVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1053, 'BERNARD EDUARDO GODOY ANDINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1054, 'CARMEN CECILIA SEVILLA FÚNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1057, 'CELEO FRANCISCO MOLINA BONES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1058, 'CINTHIA LETICIA OSORTO AVILÉZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1059, 'CLARISSA MICHELLE DÍAZ CÓRDOVA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1060, 'CLAUDIA YAMILETH SOTO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1062, 'DAILIN ELIZABETH ALVARADO CASTRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1063, 'DANIA JACKELIN GONZÁLES MONTECINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1064, 'DANIA MERCEDES MOLINA ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1065, 'DARIO JOSÉ SÁNCHEZ VILLAFRANCA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1066, 'DAVID ABRAHAM RUÍZ ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1067, 'DAVID ALBERTO MÁRQUEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1069, 'DAYSI ISABEL ROUSSEL OYUELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1070, 'DENIA YADIRA OSORTO MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1071, 'DORIS JULIBETH CHINCHILLA MURILLO', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1072, 'DUNIA JUDITH HERNÁNDEZ CASTELLÓN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1074, 'EDWIN JOSUÉ AUXUME ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1075, 'ELVIA ROSA NAVAS ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1076, 'ERICK EDGARDO ESTÉVEZ ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1078, 'ESTEFANA JANETH PINEDA ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1081, 'FRANCISCO ALEJANDRO HERNÁNDEZ AGUIRRE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1082, 'GABRIELA ALEJANDRA ELVIR ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1083, 'GLORIA VANESSA BANEGAS ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1084, 'GLORIA VIRGINIA MEDINA ÚCLES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1085, 'GUSTAVO ADOLFO SOSA LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1087, 'HELLEN GABRIELA PALMA CANALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1090, 'ISIS LUCIA MATUTE HERNÁNDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1091, 'IVIS ZARINA MARCÍA RODRÍGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1092, 'JAMNIA PAOLA CERNA BOURDETH', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1093, 'JARED IVAN ARRIAGA RUÍZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1094, 'JOEL ENRIQUE HERNÁNDEZ RAUDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1095, 'JOHNNY  CASTRO FUNES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1103, 'KAREN GABRIELA ESTRADA ZÚNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1104, 'KAROL MARITZA RICO RIVAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1105, 'KAROL PATRICIA SÁNCHEZ CARRANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1106, 'KATHERINE GISELLE ORTEGA MORENO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1107, 'KATHERINE PAMELA PINEDA VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1108, 'KATLEEN JULIETH BACA ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1109, 'KELIN YANORIS FLORES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1110, 'KEVIN ORLEN RIVERA VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1111, 'LAURA LETICIA NÚÑEZ ISIDRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1113, 'LESLY CAROLINA SILVA ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1114, 'LICYN KARINA CASTELLÓN SOLÓRZANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1116, 'LINDA SUYAPA CANALES ANDINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1117, 'LOURDES SUYAPA SUAZO RÁPALO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1118, 'MABELLY ZOBEYDA IZAGUIRRE LEÓN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1121, 'MARÍA ELENA SANTOS SÁNCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1122, 'MARIA JOSÉ QUIJANO VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1123, 'MARLLALY GABRIELA ZÚNIGA CASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1125, 'MERCEDES CAROLINA CARDOZA LAGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1130, 'NORA CECILIA MONTOYA BACA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1131, 'NORMA TATIANA MARADIAGA SAUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1132, 'OLVIN RENIERY GODOY FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1134, 'OSCAR EDUARDO HERNÁNDEZ ZÚNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1135, 'OSCAR LEONEL ALVARADO FIALLOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1136, 'OSMAN ISAAC MAZARIEGOS ZAPATA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1137, 'OZZIE DANIEL MANZANO BULNES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1138, 'RAMON VIRGILIO GUNERA AGÜERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1140, 'RENE ISMAEL HERRERA PONCE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1141, 'RICARDO ALFREDO CERRATO GENOVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1142, 'RONALD JOSÉ VARELA RÍOS', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1143, 'RONY GERARDO ANDINO ERAZO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1144, 'SANDRA BERNARDA GÓNZALES AGUILERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1145, 'SANDRA MELISSA SALINAS MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1147, 'STEPHANNY YARELI CERRATO LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1148, 'TANIA MICHELLE SOSA LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1149, 'TREASY JASMYN JUÁREZ PADILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1151, 'WALESKA MIREYA TRIMINIO CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1152, 'WENDY MARICELA LÓPEZ ZÚNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1153, 'YESY MARLENEE RODAS MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1154, 'YOSELIN LIBETH ORDÓÑEZ CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1155, 'ALBERTO JONATHAN VALLE ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1156, 'ANA GABRIELA OCHOA MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1157, 'ANA KARINA MONTIEL ESCOTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1159, 'ANYI TRINIDAD RIVAS CANALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1160, 'ARNOL  GONZÁLEZ MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1161, 'JOSE NORMAN MEDINA ZUNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1162, 'BESSY YOHANNA MARTÍNEZ MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1163, 'BETY YOJANA SUARES HERNÁNDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1164, 'BLANCA GISELA VILLALOBOS HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1165, 'BRENDA ROXANA SAUCEDA CÁCERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1166, 'BRYAN GABRIEL VALLADARES CARRANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1167, 'CARLOS DAVID LAGOS FONSECA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1168, 'CARMEN ELISA LANZA AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1169, 'CATHERINE YAMILETH SANTOS VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1170, 'CESAR ANDRES MELENDEZ SANDRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1171, 'CESAR ESAUL TEJEDA ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1174, 'CHRISTIAN ALEXANDER NUÑEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1175, 'CLAUDIA YACKELINE ACOSTA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1176, 'CLAUDIO IVÁN HENRÍQUEZ CÁRDENAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1177, 'DANIEL ANTONIO SALGADO SAUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1179, 'DULCE MARÍA MARTÍNEZ HENRÍQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1182, 'EDUARDO DAVID MALDONANO VALLEJO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1183, 'EDUARDO  OSEGUERA SUAZO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1184, 'EDWIN GEOVANY AMADOR VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1185, 'ELMER JOSÉ ESPINAL CHÁVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1187, 'FRANCISCO JAVIER CRUZ VELÁSQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1189, 'GISSELA ALEJANDRA CHAVEZ VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1190, 'GROSBIN EDGARDO BONILLA NUÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1193, 'HEBERT MISAEL ELVIR CASTRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1195, 'HEYDI PAOLA RODRIGUEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1197, 'HILDA YAMILETH SOTO PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1198, 'INDIRA SARAHI MEZA MOREIRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1199, 'INGRID NOELGA GONZALES BACA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1200, 'JAIRON JOEL ANDINO PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1201, 'JERSON FAURICIO ZAVALA FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1202, 'JESUS EDGARDO VILLALTA BARAHORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1203, 'JONATHAN DANIEL MARTINEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1205, 'JOSE ALEXIS CRUZ RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1206, 'JOSE CARLOS CORDERO CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1207, 'JUAN CARLOS GODOY OSORIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1208, 'JUAN CARLOS SIERRA LIZARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1210, 'KELIN JANETH CANALES MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1212, 'KENIA VANESSA MALDONADO TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1213, 'KIMBERLY MELISSA QUIRÓZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1214, 'LEISY WALESKA FERRERA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1215, 'LOYDA IVETH DOMÍNGUEZ MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1216, 'LUIS ANTONIO AMADOR FIGUEROA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1217, 'LUIS ERNESTO ALVAREZ AMAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1218, 'LUIS FERNANDO VALLADARES SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1219, 'MARTHA JAMILETH TURCIOS HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1220, 'MARTHA JUDITH BARAHONA GAITAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1221, 'MARTHA MARÍA ALVARADO RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1222, 'MARVIN ABEL CHIRINOS RIVAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1223, 'MARYORIE CRISSEL RAMÍREZ MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1224, 'MAYRA ELIZABET CANALES HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1225, 'MAYRA KARINA ARIAS FERRUFINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1226, 'MELANY LIDENNY COLINDRES CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1227, 'MERCEDES ISABEL SALVADOR PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1229, 'MIRIAM OFELIA HERNANDEZ IRIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1230, 'MODESTO ANTONIO MEDINA JUANEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1231, 'NADIA CAROLINA CERRATO DÍAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1233, 'PAMELA JAQUELINE COELLO VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1235, 'RICARDO DAVID POSADAS ÁLVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1236, 'SERGIO ALEJANDRO CANALES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1237, 'SIHAM  ASFURA GAVARRETE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1238, 'SILVIA SOFIA OCHOA PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1240, 'SILVIA ZULEMA HERNÁNDEZ DURÓN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1241, 'SINDY ALEJANDRA ARGEÑAL CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1242, 'SOANY GABRIELA BONILLA MAIRENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1243, 'STEFANNY MICHELLE CHAVEZ GUIDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1244, 'TANIA SARAHY SUAZO CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1247, 'YANSEN FABIOLA AVILA UCLES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1249, 'YESSICA PATRICIA AGUILERA HERNÁNDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1250, 'YUILAN  HERNÁNDEZ ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1251, 'YURY YARITZA GUNERA ELVIR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1255, 'CARLOS ENRIQUE MARADIAGA LEZAMA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1256, 'FABRICIO EDUARDO ZUNIGA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1257, 'CATI YOJANA ORDOÑEZ CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1258, 'CATHERINE ELIZABETH BETANCOURTH RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1259, 'ESTEPHANIE CAROLINA CERRATO LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1260, 'KATYA MARCELA MEDINA SANDRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1261, 'MARIAN JULLIETTE CALIX TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1263, 'CARLOS FERNANDO TRABANINO VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1264, 'ALESSIA MARISOL LAINEZ AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1265, 'JOSE MARIO JIMENEZ ALFARO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1267, 'ANGY BELGINY VENTURA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1270, 'RONY ADALID GARCIA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1272, 'CECILIA MARIA CACERES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1273, 'PAOLA MARIA SIERRA DEL CID ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1274, 'JONATHAN FABRICIO ALBERTO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1275, 'EMIL JAVIER ARGUETA AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1276, 'GLENDA ROXANA RODRIGUEZ HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1277, 'IVAN ALBERTO MENDEZ MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1278, 'CARLOS DYLAN ESTRADA MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1279, 'JIMMY ALEXANDER LOPEZ REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1280, 'MARVIN ISMAEL LOPEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1281, 'OSCAR LUIS CORDOVA LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1283, 'WILIAN EDUARDO VARGAS FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1284, 'KARENN NINOSKA LAGOS VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1285, 'MAC OLIVER CABRERA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1287, 'MARCO ANTONIO CABALLERO ZAPATA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1288, 'DARWIN ENMANUEL CASTAÑEDA MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1289, 'CARLOS EMILIO PINTO GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1291, 'LINDA REBECA GARMENDIA MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1292, 'ELIUD ISAI ESTRADA CACERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1293, 'LAURA DAMARIS ALVARADO MORALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1294, 'DORIS CELENE MENDOZA MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1295, 'BLANCA AZUCENA COLINDRES SALGADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1296, 'DAVID ELIAZAR SOTO TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1297, 'HUBENER RAMON ORDOÑEZ DOMINGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1298, 'OSMAN LEONEL REYES PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1301, 'GUSTAVO ADOLFO URRUTIA AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1303, 'ARTHUR ALEXANDER BENAVIDES URBINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1306, 'DANIEL  VILLATORO JACOME', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1307, 'ROSA LESBIA JIMENEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1308, 'GEOVANNY FRANCISCO BUSTILLO GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1309, 'CRISTIAN ARIEL GONZALES CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1310, 'CHRISTOPHER ORLANDO FLORES ALVARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1311, 'RAMON DE JESUS  CAMBAR REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1312, 'CESIA JEMINA ALVARADO RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1313, 'JARITZA MELANY MALDONADO BENITES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1316, 'CESAR AUGUSTO AMADOR NUÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1317, 'DENNYS RAINEL MEJIA LAINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1320, 'EDA PATRICIA RODRIGUEZ CHIRINOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1321, 'ANGUIE JULISSA MORAZAN LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1322, 'MALENY MARISSA PONCE GONZALEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1323, 'OSCAR EMMANUEL ZAVALA MEDRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1324, 'LIDIA ALEJANDRA RODRIGUEZ SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1325, 'EFREN EDGARDO AMADOR RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1327, 'KIMBERLYN JISSEL MORENO MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1328, 'JORGE LUIS CERVANTES SERRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1329, 'BESSY AMARILIZZ SALGADO VILLELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1330, 'PERLA MARIELA RODRIGUEZ ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1331, 'JORGE LUIS DIAZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1332, 'JOHANELY DORITZEL TREJO RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1333, 'ALEX ALFREDO PINEDA CANELAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1334, 'ROSA MIREYA RIVERA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1335, 'THARIN YURENI DUARTE GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1336, 'JONATHAN BENJAMIN OLIVA SALINAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1337, 'IRIS CLAUDET CARDOZA RECONCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1338, 'FATIMA MARIA CERRATO SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1339, 'GUSTAVO ALEJANDRO VELASQUEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1340, 'JUAN MARTIN MENDEZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1341, 'FRANKLIN ALEXANDER AMAYA ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1342, 'KENIA JULISSA CRUZ CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1343, 'CARLOS EDUARDO ANDINO TURCIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1344, 'EDWIN ALFREDO VASQUEZ PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1345, 'RICARDO ANTONIO FLORES VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1346, 'ALLAN JOSUE RODRIGUEZ OSORIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1348, 'DIANA DEL CARMEN BANEGAS GUARDIOLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1349, 'MARELYN LETICIA LOPEZ RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1350, 'FRANCISCO JAVIER GOMEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1354, 'ROLANDO JOSE MARTINES MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1355, 'OLMAN ISRAEL CERRATO BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1357, 'KATYA IVETH LANZA MELGAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1358, 'CARLOS MANUEL LOPEZ TURCIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1359, 'MANUEL EDUARDO AGUILERA ESTRADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1360, 'EDWIN DONALDO MOLINA ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1362, 'SANTOS MAXIMINO MARTINEZ ANDINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1363, 'FERMIN  AGUILERA CARRASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1366, 'ROCIO ARELI SARAVIA HENRIQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1367, 'RITZA MARGARITA FLORES VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1370, 'STEPHANIA RAQUEL RODRIGUEZ MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1371, 'OLGA KARELIA NAVARRO MIDENCE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1372, 'SUCETH GISSELT ROSALES GIRON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1374, 'EVELIN ARGELIA CAÑAS MONTALVAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1377, 'JUNIOR GERARDO OSORIO BARRIENTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1380, 'CANDIDO ALCIDES OSORTO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1385, 'CARLOS FERNANDO GUZMAN ESPINOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1386, 'CARLOS JAVIER AGUIRRE ALVARENGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1387, 'ERICK IVAN COTO RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1388, 'GENARO ALBERTO MEJIA PORTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1391, 'JOSE ALBERTO MEJIA MURCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1392, 'JOSE MILTON LOPEZ EUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1393, 'JOSE SAMUEL RAMIREZ RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1394, 'JULYSA MARILYN CABRERA ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1395, 'KARINA PAOLA MEJIA CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1397, 'LUIS FERNANDO MIRANDA CANELO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1398, 'MARIA TEREZA PINEDA MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1400, 'MAYRA REBECA BLANCO QUINTERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1404, 'SKARLETH JOHANNA MARTINEZ ECHEVERRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1405, 'SUYAPA TERESA BU BORJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1406, 'ANA KARINA RIVERA REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1407, 'CARLOS EDUARDO MAIRENA ENAMORADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1411, 'FATIMA BEATRIZ SUAZO ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1412, 'GATSBY JASMIN LOPEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1413, 'GISELA ESPERANZA CRUZ VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1415, 'JUAN CARLOS HERCULES MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1416, 'KENIA CAROLINA RAMIREZ ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1417, 'LUIS ROBERTO REYES LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1419, 'MIGUEL ANTONIO SUAZO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1420, 'NOHE OMAR CERRATO RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1421, 'ONELMA CATALINA SANCHEZ ULLOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1422, 'PAUL FRANCISCO BARAHONA ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1423, 'PEDRO MEDRANO FUNEZ ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1425, 'RUTH ARACELY MARTINEZ VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1428, 'WENDY  FUENTES TOVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1430, 'YESSICA  FONSECA ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1431, 'ANDY ZURIEL MATAMOROS FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1433, 'ERNESTO ADOLFO TABORA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1437, 'HENRY SAMUEL REYES CHINCHILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1438, 'JOHNNY ALEXANDER VINDEL SERRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1442, 'MARTHA GABRIELA CERRANO MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1445, 'MYRYAM AZALIA MARTINEZ MAJANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1446, 'OSCAR JAVIER CASTELLANOS PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1448, 'REINA MARIA ROJAS PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1450, 'RENE HUMBERTO CASTELLANOS BLANCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1452, 'ROLANDO ANIBAL CACERES ULLOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1455, 'TELMA DINORA AVILES OSEGUERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1457, 'WENDY CAROLINA DOBLADO CASTELLANOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1459, 'ALECK EDUARDO FONG DUARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1460, 'ALFREDO HERNAN ALVARADO MADRID', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1461, 'ANDREA SCARLETT BARAHONA FERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1463, 'CARLOS DANIEL FIGUEROA TRUJILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1464, 'CHEYLA MARINA SOLIS CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1465, 'DORIAN ARLETTE COLINDRES SANTAMARIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1466, 'ERICK GUSTAVO VELASQUEZ PEÑA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1467, 'ERIKA DEL CARMEN SORIANO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1468, 'FATIMA WALESKA TABORA AYALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1470, 'HEVER GEOVANNY CASTILLO VALLE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1471, 'IVIS ORLANDO CONTRERAS ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1472, 'JENNY GABRIELA ULLOA GALVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1473, 'JUAN MIGUEL AGURCIA ESPINOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1474, 'KAREN MELISSA AGUIRIANO SALINAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1475, 'KARINA ANTONIA GUZMAN CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1476, 'KATERIN ESTEFANY VELASQUEZ GARAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1477, 'KEYLI ARACELY VENEGAS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1478, 'LILIANA EDITH ROMERO ESCOBAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1480, 'NORMA YANETH MOLINA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1481, 'OLGA PATRICIA LAGOS COLINDRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1482, 'OSCAR ALEXIS ORTEGA REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1483, 'RAFAEL ANGEL UGARTE BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1485, 'ROGER JUSTO MUNGUIA ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1488, 'ANA SOFIA CHÁVEZ RUÍZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1489, 'ANDRES ADONAI MATUTE PUERTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1493, 'GABRIELA CAROLINA SANCHEZ REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1494, 'HAROL JOSUE OSORIO MEZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1497, 'IVIS REYNALDO ALMENDAREZ PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1500, 'JESUS HUMBERTO MARADIAGA CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1502, 'NATTALY VANESSA LAGOS ANDRADE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1504, 'RAMON ALEXANDER MORALES GIRON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1505, 'ROGER ELÍ CASTELLANOS MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1508, 'BELKIS ESTEFANI GARCIA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1509, 'ANGIE STEPHANIE BONILLA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1510, 'BRYAN RICARDO MENDOZA SALGADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1511, 'COLLINS FRANSHA DOMINGUEZ CONCEPCION', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1513, 'HECTOR EMILIO CASTELLANOS LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1514, 'HEEDY YOELY GARCIA RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1516, 'JOHAN JOSEPH GARCIA FERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1517, 'JOSE EDUARDO VELASQUEZ CALIX', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1518, 'JULIO ENRIQUE PAZ MACHORRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1519, 'KATERYN VANESSA SABILLON CANALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1520, 'KATHERINE GISELLE KATTAN FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1523, 'MARTHA CECILIA HERNANDEZ HENRIQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1524, 'NORMA ELISA LICONA NUÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1525, 'ROXANA VANESA AYALA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1526, 'SOFIA YAMILETH AZUCENA ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1527, 'VICTOR MANUEL GUARDADO ESCALANTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1529, 'ALLAN JAVIER GUARDADO GUEVARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1530, 'AMILCAR JOSUE AREAS ANDURAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1531, 'ANA JULIA ZELAYA ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1533, 'ASTRID GISSEL LOPEZ PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1534, 'BELKYS DALISEY DIAZ RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1538, 'JAVIER OSMAN LOPEZ TROCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1540, 'KATHERINE VANESSA DOBLADO CASTELLANOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1542, 'MIGUEL ANGEL LOPEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1544, 'NOLVIN EFREN ROMERO DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1546, 'REINA ARGENTINA ALVAREZ PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1552, 'CINDY PAOLA MARTINEZ CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1553, 'EDNA CECILIA VARGAS SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1554, 'GREISY MAUDELY GUZMAN AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1557, 'JESUS ALBERTO SANABRIA SANABRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1558, 'JOSUE DAVID SABILLON ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1559, 'JUAN DANIEL CANTILLANO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1560, 'JULIA ALEJANDRA SOLANO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1562, 'MERARY ELIZABETH PEÑA COTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1563, 'NORMA YOLANDA PAZ TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1564, 'SAMUEL ISAI MEJIA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1565, 'SENIA PETRONA VARGAS LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1566, 'VERONICA JOSSELIN DAVIS SARAVIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1568, 'WENDY JULISSA ALCANTARA RIVAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1571, 'KEVIN HERNAN CISNEROS PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1572, 'CELIA MARLENY LOPEZ MORALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1573, 'JONY ALFONSO LUNA PORTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1575, 'GERARDO ALFREDO AJURIA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1576, 'JOSE DAVID ORTIZ MONTERROSA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1577, 'BRENDA SUYAPA MERCADO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1578, 'OSCAR BENJAMIN SORIANO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1579, 'KAREN ALEJANDRA PINEDA FERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1580, 'FERMIN  LAINEZ IRIARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1581, 'MARCO ANTONIO MENDEZ ABREGO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1582, 'WILSON GEOVANNY ORDOÑEZ ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1583, 'ELVIS ENRIQUE MORALES VALDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1584, 'ZINNIA DAMARIS LANZA GUZMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1585, 'WALESKA REGINA PEÑA LAGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1588, 'GLADYS LARISA AMAYA PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1589, 'ANGEL ALEXIS ZAMORA MARIN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1590, 'ELSA NOEMI GARAY RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1591, 'YIMI JACKSON PERLA RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1592, 'JORGE ARMANDO PERDOMO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1593, 'JUAN CARLOS LOPEZ CARDONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1594, 'VICTOR NOE NUÑEZ SEURANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1595, 'MARBEL RENAN ALVARENGA MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1596, 'CRUZ ROLANDO COREA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1597, 'MAURICIO MOISES ANDINO SALGADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1598, 'EDILBERTO  DOBLADO SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1599, 'ISRAEL  LOPEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1601, 'FRANCISCO LEOPOLDO SANDOVAL RAUDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1602, 'AQUILES GUILLERMO OLIVARES MORENO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1604, 'EDGAR FRANCISCO CARRANZA ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1605, 'MIGUEL ANGEL BURGOS BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1608, 'LIBNY ANNET FERNANDEZ GALVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1609, 'SAMUEL JOSUE MEJIA MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1610, 'KARINA  PINEDA HYNDS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1612, 'NATALIA MARIA MORGAN VILLEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1614, 'OMAR ELIDIO ROMERO MATAMOROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1618, 'REYNALDO ENRIQUE MATAMOROS BERTOT', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1621, 'WALTER ALONSO CALIX RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1622, 'VICTORIA ALEJANDRA VELASQUEZ ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1623, 'CRISTOBAL RENIERE VALLEJO MONTIEL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1625, 'REYNA SULEMA SOTO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1626, 'GRICELA MARIA ESCOTO URBINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1628, 'CARLOS EMILIO MARTINEZ ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1629, 'KELLIN ELENA ORTEGA COREA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1630, 'DAFNE GISSELLE FUENTES ZUNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1631, 'VICENZO SARUCCIO BALLETTA LARDIZABAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1633, 'ABRAHAN ELICEO ROMERO CASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1634, 'ALEXANDER DAVID MELENDEZ VALLE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1635, 'ALLAN ANTONIO LANZA TEJEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1636, 'ALLAN ROBERTO PAYNE DUARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1637, 'ANA JISSEL SANCHEZ ANDINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1639, 'ANGELICA YANETH IRIAS LEMUS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1640, 'ANIBAL GERARDO PARADA MEDRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1641, 'ANNIE TATIANA SANTOS LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1642, 'ANTHONY JOSUE LOPEZ CAMBAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1643, 'CRISTHIAN ALEXIS TOVAR FIGUEROA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1645, 'DEBBY JAZZMIN NATIVI AMADOR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1646, 'DINA RAQUEL MEDINA QUIÑONEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1647, 'DIXIE CAROLINA MANCIA FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1649, 'FRANCISCO RENE RIVERA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1650, 'JOEL ALFREDO MARTINEZ ARTEAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1651, 'JORGE ANDRES CACERES TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1652, 'JOSE ADALBERTO URBINA MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1656, 'KELYN MARICELA ZUNIGA FUNES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1657, 'LAURA RAQUEL MURILLO BRICEÑO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1659, 'MARIO ISAU NUÑEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1660, 'MONICA STEPHANY ESTRADA CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1661, 'OLGA BASILIA VALERIANO MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1662, 'OLIVER ALBERTO CHIRINOS RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1663, 'OSCAR LORENZO SANCHEZ SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1664, 'PEDRO JOSUE SANTOS PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1665, 'ROBERTO CARLOS PINEDA AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1666, 'ROLANDO JOSE BONILLA ZALDIVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1667, 'RUBEN ANTONIO BONILLA ZALDIVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1668, 'SOFIA XIOMARA NUÑEZ ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1670, 'TATIANA JULISSA BANEGAS FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1672, 'ALEJANDRA MARIA GARCIA FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1673, 'ANA SOLEDAD MEJIA PALACIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1674, 'GABRIELA LISBETH LAINEZ CARBAJAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1675, 'INGRID GERALDINNE HERRERA QUIÑONEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1676, 'JOHAN ALBERTO MONTOYA YANES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1677, 'KAREN VANESSA TURCIOS VARELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1678, 'MEYSY JASSMYN COBOS ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1679, 'NARDA JULISSA JIMENEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1680, 'RINA MARGARITA ACOSTA ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1681, 'SUSANA PATRICIA JIMENEZ ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1683, 'YANIBIS LILIBETH RAMOS CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1685, 'ESTEFHANE CHARLOTTE CACERES MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1687, 'JOSE MANUEL MORENO AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1688, 'JOSUE ALEXANDER BATTISTELLO CACERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1690, 'KATHERINE JOHANA NATAREN GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1693, 'WENDY CAROLINA RIVERA CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1694, 'RIGOBERTO  MENDOZA VALLECILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1695, 'CINDY STEFANY ORTEZ AVELAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1697, 'JEFFERSON DAVID RIVERA CARDONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1698, 'JUAN ANGEL FRANCO VENTURA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1699, 'OSCAR EDGARDO AGUILAR MOLINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1700, 'LEA SARAHI MEJIA BARRIENTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1701, 'BEYKY MAYAQUIN FAJARDO FERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1702, 'CLAUDIA YAMILETH ANDINO CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1704, 'EDGARDO ANTONIO GOMEZ VALERIANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1705, 'FANY LISSETH GARCIA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1706, 'JOAN SAMUELS LAGOS OLIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1708, 'MARVIN FELIPE GARCIA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1709, 'OSCAR DARIO DIAZ REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1710, 'EDUARDO FLORENTINO CASTELLANOS CLAROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1711, 'LOURDES MAYDELI PEREZ RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1712, 'WILDER ALFREDO JEREZANO ANDARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1713, 'JOSUE MOISES BENITES AMAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1714, 'BRIANA IOLA DIAZ MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1716, 'GLORIA STHEFANNY LAINEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1717, 'KAREN LIZZETH MURILLO CONTRERAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1718, 'LUIS FELIPE CARRANZA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1723, 'VIENA CELYS FLORES CISNEROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1725, 'DENNIA YADIRA ULLOA GARAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1726, 'GISSELLE YAYLIL HERNANDEZ CARDONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1728, 'JUAN FRANCISCO PINEDA MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1729, 'LUZ PATRICIA ROMERO CHAVARRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1730, 'NELLY SUYAPA ANDRADE MURILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1731, 'OSCAR OMAR COLINDRES RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1733, 'BESSY YESSENIA OCHOA CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1734, 'DIANA VANESSA REYES MONJE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1739, 'KARINA YOLIBETH CARCAMO PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1740, 'KENIA SARAHI LAGOS ESTRADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1742, 'VEBERLY IVETH CABRERA AMAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1743, 'ROBERTO ALEJANDRO LOPEZ GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1744, 'KENCY JULISSA GODOY LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1745, 'CINTHIA MELISSA MELENDEZ AVELAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1746, 'JULISSA IVETH GIL COLINDRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1747, 'DINORA MELINA DOMINGUEZ PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1750, 'JOSE RAUL ARGUETA ANARIBA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1751, 'BERTA JULIA COELLO FIGUEROA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1752, 'BRAYAN DANIEL MERLO RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1753, 'ANA ANGELINA CONTRERAS GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1754, 'BRIAN ADONAY LOPEZ PERAZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1756, 'ERICK ROBERTO TABORA BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1757, 'HENNDY KARIELA VELASQUEZ DUARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1758, 'MARIA ENGRACIA VALLEJO TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1759, 'MARIO ROBERTO VALLADARES MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1760, 'NICOL ALEXANDRA RAMIREZ URQUIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1761, 'OWEN SINUHE MERLO RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1762, 'PAULA ALEJANDRINA MENDOZA REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1764, 'KENSY LIZETH MARADIAGA BETANCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1765, 'JEYMI CAROLINA ORTIZ PERALTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1767, 'CARLOS ENRIQUE MOLINA INTERIANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1769, 'DORIS  DUBON CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1770, 'RINA LIZETH GUZMAN ARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1772, 'KEYLIN LIZBETH GUEVARA MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1773, 'DIANA ISAMAR AMAYA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1775, 'SINDY CAROLINA ULLOA MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1777, 'NOE ISSAIAS CRUZ ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1778, 'GREYSI VERONICA COELLO TURCIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1779, 'YARLEN MICHELL FUENTES GONZALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1780, 'MARIA FURGENCIA PERAZA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1783, 'ANGIE KRISTELL FUENTES CARRASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1786, 'HECTOR MANUEL ARTEAGA DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1788, 'CATERINE BERSABE LARIOS ZUNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1792, 'FRANKLIN ANTONIO GOMEZ ROJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1802, 'HILDA PAOLA PERDOMO LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1804, 'ANTHONY MAGDIEL ALEMAN ELVIR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1806, 'PAUL EDGARDO MALDONADO LAGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1809, 'MAYRA MARCELA MALDONADO PINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1810, 'WILFREDO  MAIRENA ARTICA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1813, 'ALEX GEOVANY ORDOÑEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1814, 'NORVIN ELIZABETH VALLE CASTELLON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1815, 'CARLOS ROBERTO OCHOA CHEVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1817, 'ISIS YORLENY BENITEZ CALIX', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1818, 'DAYANNA PAMELA JIMENEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1819, 'PAULA MARINA VALERIANO CALLEJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1820, 'JENIFFER WALESKA BULNES CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1821, 'IRMA DAMARI ESPINOZA ESPINOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1822, 'EDYS ALEXANDER VELASQUEZ CANACA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1823, 'JOSE FRANCISCO MALDONADO CHAVARRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1824, 'RUBIDIA GUILLEN ULLOA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1825, 'LEXEYDA WALESKA GARCIA VARELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1827, 'MARIO ALBERTO REYES TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1828, 'EMANUEL ANTONIO GARCIA MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1829, 'LIDIA DESIREE PINEDA SILVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1830, 'GRECIA NUOVY MARADIAGA BLANDIN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1833, 'JUDITH ELISA ORELLANA TROCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1834, 'MERARY ELIZABETH ARITA JUAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1835, 'SANDRA YAMILETH MENDOZA MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1837, 'JULIO CESAR RAMOS MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1838, 'NESTOR ANTONIO FUENTES MELENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1839, 'FREDY JOSE MONTOYA GALEAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1841, 'JUAN JOSE GARAY POSA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1843, 'EDWIN OMAR PEREZ AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1845, 'SCARLETH PAOLA ERAZO GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1851, 'MARIO ANTONIO MEDINA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1852, 'ANGELA POULETTE PERALTA MELENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1853, 'PAOLA VANESSA RODRIGUEZ MERCADAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1854, 'GEOVANNY ANTONIO CARRASCO GALO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1855, 'ADELA PRISCILA PAZ MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1856, 'OLMAN ANTONIO OCHOA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1860, 'MODESTO  RODRIGUEZ ESPINAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1862, 'YESICA VALESKA GONZALES GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1863, 'ZENAIDA NOHEMY REYES HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1864, 'KEILA JOHANA PAVON GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1866, 'JORGE RUBEN OLIVA NUÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1868, 'CINTIA  PINEDA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1869, 'GUILLERMO ARTURO CORTES CHACON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1870, 'MIGUEL OMAR LOPEZ OVIEDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1871, 'LILIAN CAROLINA PADGETT SILVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1872, 'BEDHER JOSE MANZANARES VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1873, 'RICARDO RUBEN SANCHEZ QUIÑONEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1874, 'NELSON OSWALDO ESCALANTE PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1875, 'GUILLIAN SOGGEY OSEGUERA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1876, 'DELIA LIZETH URBINA FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1878, 'MARIA SUYAPA OVIEDO MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1879, 'ADELA  MELGAR CONTRERAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1880, 'NIRYAN YISLEN COLOCHO SALGADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1881, 'CARLOS ALEXANDER OLIVA MANZANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1882, 'OLGA ANTONIA HASBUN MONTES DE OCA ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1883, 'ANA MAGDALENA RODRIGUEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1884, 'DARWIN ALBERTO HERRERA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1885, 'JUNIOR RENE RODRIGUEZ SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1886, 'MELISA GABRIELA LORENZO RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1888, 'HELEN YARITZA FIGUEROA GARAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1889, 'JUAN CARLOS SOSA LOBO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1890, 'MARIO FERNANDO ARAGON DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1891, 'SUSAN GYSSELLE SILVA MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1892, 'IVIS MELISSA RIVAS ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1898, 'DILMA ROSIBEL MARADIAGA MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1900, 'ALEXI ARNALDO VASQUEZ MANCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1902, 'JORGE ARMANDO VASQUEZ RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1903, 'EDWIN ALFREDO TORRES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1904, 'MARVIN YOVANY GIRON ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1905, 'YEFERSON ADONIS UCLES CHACON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1908, 'DARLENE GISSELL FERRERA LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1909, 'ALLAN JASSIR REYES LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1910, 'KAREN XIOMARA ESPINAL DOMINGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1911, 'SALVADOR GEOVANI CASTRO MONCADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1913, 'OMAR DAVID GIRON DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1914, 'VICKY ARYANI PINEDA PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1915, 'DANIA CAROLINA MATUTE RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1916, 'MARLON EDGARDO ROSALES MONCADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1917, 'DANIELA RAQUEL YANEZ PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1918, 'KAREN FABIOLA PINEDA ZALDIVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1919, 'ALMA CECILIA FAJARDO BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1920, 'CRISTIAN JOSUE VILLALOBOS ESCOBAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1922, 'EDGARDO EMILSON SOTO PONCE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1923, 'MARCO LEONIDAS LARA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1924, 'MILDRE VICTORIA MARADIAGA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1925, 'KARLA ELISA MONTOYA MIRANDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1926, 'IRIS DANIELA RODRIGUEZ LARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1927, 'PERLA ESTHEFANY MASS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1928, 'MIRIAN ISABEL RAMIREZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1929, 'NAHUM FERNANDO OSEGUERA VILLALOBOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1931, 'ALEXIS JAVIER PADILLA ZAMBRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1932, 'SHERRY JANICE MENDEZ MORENO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1934, 'MARILYN JOHANA DURON HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1935, 'CRISTIAN JOSUE MORALES BUSTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1936, 'CESAR EDUARDO GARCIA VARELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1937, 'ELISA YOSELLY VELASQUEZ AREVALO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1938, 'NANCY ALEJANDRA BARAHONA LICONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1939, 'RICARDO MOISES ANDURAY CAÑADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1940, 'SANDRA YAMALI COLINDRES MIDENCE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1941, 'JOSE ADELSO ZELAYA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1942, 'MARGIE KARINA ALVARADO BONES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1943, 'BREISY GISELLE VALLADARES RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1945, 'STEVEN JOSUE PEREZ BAIDE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1946, 'CESAR ARNALDO MENDEZ DEL CID', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1948, 'YESSICA EMELINA ENAMORADO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1949, 'STEFANY NICOLE TEJEDA YANEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1951, 'SINDY NOHELY ACOSTA PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1952, 'MIGUEL EDUARDO MERCADO BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1953, 'FLORENCIO  POSADAS YANES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1954, 'INGRID BEATRIZ GOMEZ UMAÑA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1955, 'JENNIFER MELISSA LOPEZ CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1956, 'TESLA MERARY MORALES ZUNIGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1957, 'WILSON ARMANDO ENAMORADO ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1959, 'SANTOS EFRAIN CASTILLO REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1960, 'EDWIN LEONARDO FONSECA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1961, 'BIELKA JAZZEL VILLANUEVA SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1962, 'KAROL DANNIELLA ALONZO TROCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1963, 'JESICA JISSEL GIRON MIRANDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1965, 'NANCY JOHANNA FAJARDO PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1966, 'RITZA NINETT SEVILLA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1968, 'ARMANDO JOSE BARAHONA MURILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1970, 'GABRIELA MARIA SOLIS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1973, 'KEYLA SARAHY PONCE BARRIENTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1974, 'JAIRO ROSSELL CORTES  FERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1975, 'RUBEN FRANCISCO CASTRO MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1976, 'JENNIFER SUSANA HERNANDEZ ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1978, 'MAUREEN LIZETH GARCIA AVONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1979, 'EVELYN ESTEFANY SORIANO CLAROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1984, 'ROGER GEOVANNY ORTEGA CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1986, 'CHRISTOFER UBENSES SUAZO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1990, 'SUELLEN MARISOL LOPEZ CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1992, 'EDELYN ROSARIO ARTICA SANDRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1995, 'ELDER OMAR GUEVARA AQUINO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1996, 'JULIO CESAR CASTILLO BENITEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1997, 'CHRISTIAN JOSUE FUENTES LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1999, 'JIMMY NATANAEL OYUELA MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2000, 'LAURA ROSSELA SALGADO ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2001, 'NIDIA ELIZABETH VILLALOBOS ALFARO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2002, 'CARMEN  YANINA RODRIGUEZ ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2003, 'SKARLETH MELISSA DURON ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2004, 'BRYAN LEVI VEGA SUAZO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2005, 'ELMER  JOSUE GODOY VARGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2006, 'ANA ROSA ALVARENGA RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2007, 'ANA JOSE PERDOMO ABARCA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2008, 'ERICK OMAR VASQUEZ ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2009, 'CRISTHIAN JOSUE MACOTO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2011, 'SANDRA MARLENI CORTEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2012, 'ARACELY ELIZABETH ANDINO CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2014, 'KENDY JEFET SMART URQUIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2016, 'MARCO TULIO GARAY TEJEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2017, 'KEVIN JOSE NIETO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2018, 'VICTOR MANUEL MENDOZA RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2019, 'JAMES MICHAEL OLSEN MANUELES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2020, 'ANDERSON JAFET AVILA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2021, 'JOSE DAVID CANACA VILLATORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2022, 'EMMANUEL  IRAHETA LAINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2024, 'Eder Orlando Barahona Lanza', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2026, 'MARCO ANTONIO MONCADA FIGUEROA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2028, 'LETICIA LISETH LOPEZ GUILLEN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2030, 'SINTHIA GISSELLE CASTILLO RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2031, 'HEIDY YARYTZA VALLECILLO ENAMORADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2033, 'KEVEN ALFONSO DONAIRE GALLARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2035, 'STEFANY SARAHI POSADAS HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2040, 'MARLON RAMON CARCAMO RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2041, 'JUAN MIGUEL MEJIA CHEVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2043, 'JAIRO ANTONIO BANEGAS PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2044, 'HECTOR ORLANDO THOMPSON NOLASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2045, 'ERIK  JONATHAN SANCHEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2048, 'MILTON ALEXIS MONTES ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2049, 'MARIA VICENSA DURON .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2050, 'Marcela Yisselle Amador Montero', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2051, 'Alba Lizzeth Cruz Barrientos', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2052, 'WILSON ALEXANDER MATUTE OCHOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2053, 'JENSSY ABIGAIL HERNANDEZ RODAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2055, 'CARLA GABRIELA BUSTILLO MONTUFAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2056, 'KATHERINE FABIOLA LOBO AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2057, 'TESLA GABRIELA SIERRA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2058, 'ANDREA MICHELLE AMAYA SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2059, 'ROSA  LINDA ALVARADO VALLE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2060, 'GELIN YOLANDA RIVAS ESPINOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2063, 'Linda Mayli Villatoro Torres', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2065, 'LIANA KATHERINE RAMOS ARITA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2066, 'ERICK FERNANDO MONTOYA TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2068, 'EDNA ORFILIA GUERRA DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2069, 'OMAR FERNANDO MAJANO POSADAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2070, 'MARIA SUYAPA ARTICA CORDOBA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2071, 'INDIRA NADESKA ERAZO OTERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2072, 'ANGEL JEOVANNY PACHECO ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2073, 'BEATRIZ ALICIA ANDINO LAGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2074, 'BHIANCA KARMELINA GALINDO SOTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2076, 'DIGNA EMERITA LAGOS VAZQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2078, 'ERICK DAVID CARIAS VARGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2079, 'FIORELLA GRISSEEL SOSA SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2080, 'GABRIELA NICOLL VASQUEZ CASTELLANOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2081, 'MABIS DARIELA LOBO GRIJALVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2082, 'Marcela Yamileth Murillo Godoy', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2083, 'NOLVIA MARIA FERRERA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2084, 'ROSARIO BANESSA ORDOÑEZ CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2085, 'SCARLETT BETSABE RODRIGUEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2087, 'VIRGINIA MARGARITA LOPEZ MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2088, 'WENDOLY KARINA MATAMOROS ANDRADE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2089, 'XAVIER ANDREE ORTEZ MAIRENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2090, 'JEYSEL JUDITH CHAVARRIA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2092, 'ESTEFANNY GISSELL ARDON ESCOBAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2093, 'HADIT MINERVA ZEPEDA SHAW', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2094, 'LOURDES EDITH MARADIAGA NOLASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2095, 'ISABELLA NICOLLE GUZMAN SANTIAGO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2096, 'BERTHA ELENA JIMENEZ SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2097, 'ISAAC SHAMIR URQUIA ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2098, 'DARWIN JOSUE CARIAS TOVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2099, 'CHERIL ESTHEFANY CERRATO TOVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2100, 'ABDIEL JOSUE ALTAMIRANO MONCADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2102, 'OWEN ALLAN FERRERA ABBOTT', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2104, 'RUTH SARAHI GARCIA RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2106, 'MIRIAN  JANETH ESTRADA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2108, 'JESUS ROBERTO DUBON GUZMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2109, 'NORMA REGINA AGUILAR SALINAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2110, 'ANDREAINA GISSEL REYES AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2111, 'ASTRID BEATRIZ MOTIÑO BARDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2112, 'GARY ANTONIO CANO COOPER', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2115, 'OLVIN JAVIER RODRIGUEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2116, 'HILDA STEPHANNY SANTOS CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2117, 'DINA CORA CERRATO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2120, 'ALEJANDRA DECIREHT ELVIR PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2123, 'ALLAN JOSUE TÁBORA MELGAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2124, 'ALMA LIZETH QUINTANILLA GARCÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2125, 'ANA CRISTINA TÁBORA COTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2126, 'ANA RUT RODRIGUEZ ALONZO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2128, 'ANGGIE MARLENE ZALDIVAR FAJARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2129, 'ARIEL DAVID HERNANDEZ MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2131, 'ASTRID RUBI LEON MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2132, 'BERNAR DANIEL CLAROS DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2133, 'BRENDA . GARCIA ALFARO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2134, 'CARLOS GERARDO ALVARADO AYALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2135, 'CARLOS MAURICIO CRUZ DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2137, 'CELIO FERNANDO HERNANDEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2139, 'CINTHIA YAMALY PINEDA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2141, 'CRISTIAN IVAN ESPAÑA ALAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2142, 'CYNTHIA JACKELINE TABORA CLAROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2143, 'DALIA NAZARETH BENITEZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2144, 'DANIEL ENRIQUE VARGAS GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2146, 'DELMY JACKELY SALAZAR VILLELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2147, 'DENIS ARIEL GOMEZ ZALDIVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2148, 'DIANA JULLISSA MATEO MELGAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2150, 'DIEGO ARMANDO FUENTES GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2151, 'EDGAR FABRICIO CRUZ LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2152, 'EDWIN EDGARDO PINEDA SUAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2153, 'EDY YORGENY DUBON GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2157, 'FAUSTO JOSUE MADRID .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2158, 'FRANCIS DANIELA PINEDA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2159, 'FRANCISCO AMÍLCAR CASTRO LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2161, 'GISSELA MARIA PINTO ARITA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2162, 'GLENDA LASTENIA MACHADO SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2164, 'GREISY HERMINIA PINEDA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2165, 'GREISY LOURDES ORELLANA PERDOMO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2166, 'INGRID YAMILETH CHAVEZ MATEO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2167, 'INGRIS PAOLA PINEDA GÓMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2168, 'IRMA CAROLINA ZELAYA CHINCHILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2170, 'JESSICA LARISSA CALDERON LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2171, 'JOSSELINE CAROLINA CRUZ CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2172, 'JUAN DANIEL JALLU REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2175, 'KAREN WANESSA LÓPEZ RODEZNO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2176, 'KAREN YAMILETH REYES VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2177, 'KAREN YULISA FUENTES NAVARRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2178, 'KARLA MELISSA TABORA DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2179, 'KARLA YASMYN GUTIERREZ ORTEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2182, 'KENDY SAMARY MONDRAGON ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2183, 'KENIA ROSMERY ALCANTARA PORTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2184, 'LILA MARGARITA PINEDA COTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2185, 'LILIANA ISABEL ROMERO GARAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2186, 'LOURDES ROSIBEL SANDOVAL AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2187, 'LUIS EDGARDO ROMERO JIMENEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2188, 'LUISA IVETH MARTINEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2189, 'MAIDA ELISA PERDOMO GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2190, 'MARCO TULIO ORELLANA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2191, 'MARIA ELENA ALVARADO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2192, 'MARIA JOSE BONILLA SANABRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2194, 'MARTA JANETH MACHORRO RAIMUNDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2195, 'MARYLIN JAZMÍN SANTOS LARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2196, 'MICHAEL ANTONIO DUBON MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2197, 'MIRNA JEANETH CASTELLANOS MANCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2199, 'NIKSON JAVIER DERAS LEMUS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2200, 'NOLVI AMILCAR HERNANDEZ PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2202, 'OSCAR GEOVANY MARTINEZ VEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2203, 'PAMELA CECILIA CARRANZA AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2204, 'RICCY MELISSA MADRID TEJADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2207, 'ROSA ELENA PERAZA PINTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2208, 'ROSA MARIA GARCIA GUILLEN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2210, 'SAMIRA . GUILLEN GUZMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2212, 'SELENIA JACKELINE DUBON GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2213, 'SENIA ISABEL RAMOS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2214, 'SHADIRA ITZEL FORTIN LOZANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2217, 'TERESA YAMILETH CRUZ AGUIRRE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2218, 'VERONICA ABIGAIL SAYBE GRANADOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2219, 'WENDOLLY PAMELA LUNA TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2221, 'GRECCIA MARIA PINEDA TEJEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2222, 'YORLENI MELISSA MEDINA AREVALO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2224, 'YOSSELIN VALERY PEREZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2225, 'YURI ALEJANDRA CASTELLANOS BLANCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2228, 'GERARDO JOSUE ORELLANA PÉREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2229, 'DUNIA LIZBETH ENAMORADO DÍAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2230, 'JOHANA DEL CARMEN MATA LEIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2231, 'JESUS RANDOLFO PAGOAGA TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2232, 'MARIA ANTONIA CASTRO PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2233, 'FRANCIS ENRIQUE LOPEZ DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2242, 'ANA GEORGINA MORALES .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2244, 'YESSICA PAOLA CASCO LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2245, 'ANA SOFIA CARDONA VARGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2247, 'SHERLY DAYANA SUAZO ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2248, 'ALEJANDRA POLETT CABRERA .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2249, 'MARITZA ANAI RIVERA MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2250, 'ANA GABRIELA QUEZADA BUESO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2251, 'EDER JOHZEEL BENITEZ PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2253, 'BRAYAN EDUARDO ESCALON TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2255, 'MIGUEL ADONIS REYES CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2257, 'DAVID ENRRIQUE SERRANO GUEVARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2258, 'DILCIA IDALMI OLIVA NAVARRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2259, 'CARLOS JOSE ROMERO ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2261, 'ALBA ELIZETH  ALVAREZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2263, 'MARCO ANTONIO FONSECA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2264, 'DAVID . AMAYA ULLOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2265, 'LUIS ALBERTO AVILA MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2266, 'WILIAN ENRIQUE LEMUS DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2267, 'XOCHIL ANTONIA MERCADO GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2269, 'GERSON NOEL VASQUEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2270, 'MARIA SUYAPA PINTO GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2272, 'DARIO ALEJANDRO MUNGUIA ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2273, 'JOSE ALFREDO MERCADO MONTALVAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2274, 'CARLOS ALBERTO GARCIA TEJADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2275, 'DENNIS OMAR MARADIAGA CORDOVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2276, 'JAIRO MAURICIO SALGADO ROJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2277, 'JASON GADIEL VILLANUEVA MIRADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2278, 'JESUS GEOVANNY RUIZ LANDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2279, 'JOSE FELIPE GUARDADO RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2280, 'KAROL YAMILETH PINTO GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2282, 'NELSON DAVID RODRIGUEZ MORALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2283, 'QUITH MARINUR ALEMAN ALEMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2284, 'SELVIN JAVIER SAUCEDA LUJAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2286, 'ANA YULISSA GARCIA CARDENAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2287, 'ANGELA DAMARIS ORDOÑEZ MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2289, 'DORIS YARIELA FLORES PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2290, 'FRANKLIN ALEXANDER MEDINA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2291, 'IDANIA PAOLA HENRIQUEZ MURILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2292, 'JOHANS ALEXANDER AGUILAR EUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2295, 'NORMA ELENA MURILLO PUERTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2296, 'SINTIA ESTER OBANDO VILLALOBOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2297, 'ANA JEMIMA ALVARADO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2298, 'CLAUDIA ARACELY MATA PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2301, 'GRAHAM RENIERI PACHECO ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2304, 'JENNY ABIGAIL PEREZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2305, 'KEILY DANIELA MARTINEZ RUIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2306, 'MARIAN LARISSA PRIETO PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2307, 'ASHLYN AMERICA CHAVEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2308, 'CRISTHIAN MAURICIO GUTIERREZ CHICAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2309, 'CINDY CAROLINA LOPEZ ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2310, 'CLAUDIA MARIA BARRIENTOS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2311, 'GERMAN LUIS MIER BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2313, 'JAIME RENE ROSALES SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2314, 'LESBIA MARTINA PACHECO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2316, 'NICOLLE ALEJANDRA CALIX MIER', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2317, 'ONEYDA MARIA GARAY DINARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2318, 'CARLOS ALEXANDER LUQUE LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2320, 'EDWIN GEOVANNY PINEDA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2321, 'GREICI NEREYDA GARCIA CANAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2323, 'HEIDY EDITH ORELLANA AMAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2324, 'JORGE ALBERTO ANDRADE ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2325, 'JOSE ARMANDO MENJIVAR CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2326, 'KARLIA YOSELI ALCERRO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2327, 'LESDY MARIELA MARTINEZ YANES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2328, 'LESLY YANIRA VELASQUEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2329, 'MARVA PAOLA GUITY DUARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2330, 'SAUL ALEXIS BAUTISTA DURAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2331, 'MARIELA ISABEL KAWAS DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2332, 'ANASUA ABIGAIL ENAMORADO BARDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2333, 'DIANA CAROLINA OSEGUERA ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2334, 'EDGARD DANIEL ZUNIGA FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2335, 'JOSE ALBERTO CORDON OCHOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2336, 'JOSE DAVID CHAVEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2337, 'JOSE GEOVANY MENDEZ ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2338, 'JOSE RENIERY VELEZ SANABRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2339, 'MARGIE NICOLLE GARCIA RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2340, 'TANIA YANETH LUJAN GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2341, 'YESICA MARISOL ROJAS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2342, 'YOSSELYN GUADALUPE REYES ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2344, 'CRISTINA SUYAPA CASTELLANOS GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2345, 'DEBORAH CAROLINA MELENDEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2346, 'LESBI WALDINA ALBA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2347, 'MARIA ARGENTINA VILLANUEVA SALAZAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2351, 'WENSY KAROLINA MALDONADO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2352, 'CLAUDIA YOLANDA GARCIA LUQUE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2353, 'FERNANDO JAVIER RAMIREZ MENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2354, 'FIAMA PAOLA MENDEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2355, 'JOSE LUIS AMAYA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2356, 'KIMBERLYN OSIRIS MEJIA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2358, 'NILDA YARELY RODRIGUEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2360, 'TESLA GISSELL FERNANDEZ MATEO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2361, 'AIDE AGUSTINA VILLAFRANCA MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2362, 'AZAF CADMIEL CRUZ CUNNINGHAM', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2363, 'CELSO . CRUZ BECERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2364, 'JUAN CARLOS GARCIA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2365, 'JULIANA ARGENTINA SOSA BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2366, 'KAREN GISSELL MOLINA RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2367, 'KAREN PATRICIA SALGADO CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2368, 'KELVIN SEBASTIAN PACHECO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2369, 'KEYLA EDITH ANTUNEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2370, 'MARIA JOSE REINA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2371, 'MARLEN YORLENY AMAYA BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2372, 'ANANDA YAMILETH URBINA SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2373, 'GLENDA MARISOL BONILLA MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2374, 'MAITE GABRIELA LEON GUEVARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2375, 'MOISES ALFREDO GOMEZ TORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2377, 'SALMA GABRIELA MORALES VALERIANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2380, 'WENDY NEMI ORTIZ PASCUAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2381, 'YARIELA NADINA QUIROZ DE LEON ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2382, 'CARLOS DAVID FAJARDO IRIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2383, 'MANUEL DE JESUS MANZANARES  FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2385, 'CRUZ GEOVANNY RODRIGUEZ VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2390, 'DARWIN DAVID BENAVIDES URBINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2393, 'HEISER OMAR MOTIÑO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2394, 'LEONARDO ANDRE SERRANO ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2395, 'KARLA PATRICIA SANCHEZ VILLAFRANCA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2396, 'JOSE ROBERTO AGUIRRE RUBI', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2397, 'DAYSI MILENA ORELLANA SOTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2399, 'SANTOS GUADALUPE MATUTE  ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2401, 'KEVIN EDUARDO TORRES FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2402, 'CLODOALDO . TABORA TAVEIRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2403, 'FRANCIS ALEXIS VARELA SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2404, 'JORGE ALBERTO FONSECA YANEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2405, 'DANELIA MARIBEL MURCIA RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2407, 'SAMY YOUSEFIN CASTRO GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2409, 'SIOMARA YAQUELYN RAMOS SERRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2412, 'DORIS SOBEIDA BENITEZ CHACON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2414, 'OSMAN ENRIQUE MALDONADO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2415, 'NOE MARTIN PAVON ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2416, 'ELVIN DANIEL MOTIÑO PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2417, 'ROLANDO ANTONIO RECARTE ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2423, 'LUIS RICARDO MATAMOROS LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2424, 'SANDRA ARMIDA ROSA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2425, 'EDWIN EDGARDO AVELAR DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2426, 'MARIA ASUNCION PALMA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2427, 'EVER ARNULFO RAMOS VARELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2428, 'ALICIA GUADALUPE PAVON VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2429, 'CLAUDIA  RAQUEL  COLINDRES CARRASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2430, 'JOEL RIGOBERTO CHIRINOS RIVAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2432, 'JOSE CARLOS NIETO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2434, 'GABRIEL FERNANDO LEIVA GUILLAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2437, 'ALEJANDRA NICOLLE RODRIGUEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2438, 'GARY . CASTILLO ORTEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2439, 'Yorling  Adislao  Rodriguez Ponce', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2440, 'Gerardo  Noe  Caceres Mendez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2441, 'EDWIN  RUBI MONTOYA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2442, 'WILFREDO . TORRES DOMINGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2443, 'GLORIA JAQUELINE MEDINA BENITEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2444, 'JENCY JOHANA CANTARERO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2445, 'MARLO MARITO MEZA ALMANDAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2446, 'JENNIFER SUYAPA CARCAMO LARIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2447, 'DANIA VANESSA ESCOTO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2448, 'CARLOS ALFREDO JAVIER HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2449, 'SOFIA LIZETH SERRANO MADRID', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2451, 'MARCOS  LOPEZ NORIEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2452, 'ERNELIO  RIVERA WITCHO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2453, 'NELDY CAROLINA GREEN GUTIERREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2455, 'ANDREA CAROLINA  ORTEGA LANZAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2456, 'ALFREDO EMANUEL PERDOMO  FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2457, 'ANDREA ALEJANDRA CRUZ DURON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2458, 'ALEJANDRA ADAIA ORELLANA OSORIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2459, 'BRENDA LIZETH MARADIAGA ARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2460, 'CARLOS  ARMANDO ACOSTA AGUILERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2462, 'DAVID  EDUARDO SANTOS COVER', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2463, 'DONNY RAIN RAMOS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2464, 'EMERSON ALBERTO ALEMAN BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2465, 'EDGARD STEVEN MEDINA MORADEL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2466, 'FLOR DE MARIA MARTINEZ  MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2467, 'GEISEL CLEMENTINA CALDERON TREJO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2468, 'HECTOR  ORLANDO DIAZ ANDRADE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2469, 'ISIS EMIGDIA MEJIA PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2470, 'JOSE ANTONIO NUÑEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2471, 'JONATHAN RAMIRO AMAYA AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2472, 'JOSE HUMBERTO ALVARADO MORALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2474, 'KEILLYN  ELENA HERNANDEZ VENTURA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2475, 'LIGIA SUGEY RAMOS DEL CID', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2477, 'LUIS  ANTONIO JUAREZ ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2478, 'MELANNY  MICHELLE ESCOTO CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2479, 'MARGORY  GISSELL MARTINEZ  SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2480, 'NORMA REGINA CALIX HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2481, 'NORMA  RAFAELA BANEGAS  CONTRERAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2482, 'OLDIN ARAEL QUINTANILLA LEIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2483, 'SAUL ARMANDO CARRASCO MONDRAGON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2484, 'YEISLING ALICIA ESPINAL CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2485, 'LUIS  ALFREDO ALVAREZ MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2486, 'ALICIA PAMELA ESPINOZA COELLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2487, 'ALICIA ALEJANDRA ALEMAN OLIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2488, 'ARLIS CLARISA COLINDRES FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2489, 'ADA WENDY ZEPEDA CASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2490, 'ANA LUCIA IZAGUIRRE CASTRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2491, 'AGUEDA ALEJANDRA ALVAREZ CARRANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2492, 'ANYI CLARISSA  ESPINAL MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2493, 'ANGIE  ROCIO ESPINAL  MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2494, 'BESSY SCARLETH MONCADA RUBIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2495, 'BREYSI MELORITH BARAHONA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2496, 'CARMEN LIZETH AGUILERA CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2497, 'CLAUDIA MARILIA FLORES VEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2498, 'DARWIN JOEL FLORES FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2499, 'DANIELA SARAHI SANCHEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2500, 'DENYS OMAR MARTINEZ ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2501, 'DEISY PAMELA ORTEGA PALMA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2502, 'EDUARDO JOSUE SALGADO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2503, 'ERICK MAURICIO AVILA ELVIR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2504, 'FRANCISCO JAVIER CANO MONTOYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2506, 'GERSY ALDAHIR ALVAREZ ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2508, 'HARON JOSUE ARTOLA MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2509, 'HECTOR DAVID CASTILLO ZAMBRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2510, 'IRIS YESSENIA REYES FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2511, 'INGRISD YAQUELINNE RODRIGUEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2513, 'JOSE CORNELIO FUENTES MONTALVAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2514, 'JELIN ESTEFANIA MALDONADO CASTRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2516, 'KENIA YULIETH ZUNIGA GONZALEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2517, 'KARLA YOLIBETH CRUZ JOVEL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2518, 'KEVIN NOEL SORIANO DAVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2520, 'LEDYS PATRICIA COLINDRES BAQUEDANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2521, 'LESTER DAVID GONZALES GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2522, 'LITZY MARIELA AGUILAR SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2524, 'LUZ ALEYDA BACA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2525, 'MARIANA SARAI ORDOÑEZ RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2526, 'MARCELA GISSELI MATAMOROS ARGEÑAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2528, 'MAGDA JULISSA ZELAYA MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2529, 'MARIA  FERNANDA SOLANO PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2530, 'MARLYN TERESA RODRIGUEZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2531, 'MARVIN ODILSON VARELA MONDRAGON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2532, 'MILTON RAFAEL REYES FORTIN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2533, 'MARIA FERNANDA CANALES CANALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2535, 'NANCY DINORA ESPINOZA BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2536, 'OSCAR ARIEL LAINEZ MATAMOROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2537, 'OSCAR ELVIN LAGOS FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2538, 'RONAL EDUARDO BRISUELA PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2540, 'SILVIA PATRICIA OSORTO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2541, 'SUSAN MICHELL BARAHONA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2542, 'VIVAN ESKARLA PERALTA MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2544, 'CARLOS  EMILIO LAGOS SAUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2545, 'ROSA ARGENTINA PEREZ BACA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2546, 'ORLANDO HUMBERTO AGUILERA QUIROZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2548, 'RAYMUNDO  MOISES GARCIA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2549, 'NATAN RICARDO TROCHEZ GUTIERREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2551, 'LUIS FERNANDO RIVAS GARMENDIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2553, 'JUAN CARLOS MARADIAGA TERCERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2554, 'JAIRO EDILBERTO FLORES ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2555, 'HEYSEL NICOL SERVELLON MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2556, 'GLORIA STEPFANIE OSORTO  LOBO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2557, 'FELIPE JOSUE VASQUEZ OSORTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2558, 'DENIS RAFAEL PONCE ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2559, 'DANYS HOJARSY CABRERA AUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2560, 'CENIA MAHOLY ESPINAL PORTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2561, 'CARLOS ALBERTO GARCIA GONZALEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2562, 'DANILO  JONATHAN VARGAS MONCADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2563, 'ALEJANDRA ISABEL RODRIGUEZ RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2564, 'ANUAR  JAVIER FLORES LEZAMA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2565, 'MARCOS RENE GUERRA ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2566, 'CARLOS ADAN FLORES MARQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2568, 'KAREN GISSELLE GAMEZ SABILLON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2569, 'GREISY ARACELY BENITEZ TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2570, 'YAMELY WALESKA CACERES CASTAÑEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2571, 'DOMINIC OLOFF DOMINGUEZ DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2572, 'CRISTHIAN EVARISTO CASTELLANOS TROCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2573, 'GILDA PATRICIA GAITAN ELVIR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2574, 'NACER JOEL MALDONADO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2575, 'HAZEL CAROLINA FLORES LEIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2576, 'JAVIER DARIO JIMENEZ GUILLEN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2577, 'EDGARDO  RAUL DIAZ MARQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2578, 'ZULMA KARINA BORJAS BENITES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2579, 'OLMAN ERNESTO SERRANO MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2580, 'JOSSELYN ILIANA RAMOS CUELLAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2581, 'MAHELY YAQUELINE TORREZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2582, 'KENIA LOURDES MEJIA RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2583, 'ADBEEL ENRIQUE AROCA AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2584, 'AARON ALEJANDRO GARCIA JUAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2586, 'Cristy  Graciela  Parada  Osorto ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2587, 'Jose  Rolando  Avila  Castellanos ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2588, 'LESNY SARAHI BACA BETANCOURTH', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2589, 'Lorwin  Adonis Rodriguez Ponce ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2590, 'Orlin Noel  Mejia  Torrez ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2591, 'Oscar  Javier Flores Mendez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2592, 'Pamela  Alejandra  Rodriguez  Martinez ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2593, 'Suany  Juliett  Cardenas  Cruz ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2594, 'Susana Melissa  Carranza  Ordoñez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2595, 'Wilson  Mauricio  Bones  Lopez ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2596, 'Angie Marisol Larios  Santamaría', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2597, 'Cindy Paola Enamorado Peña', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2598, 'Edgar Elias Cardoza Calidonio', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2599, 'Francisco José Ochoa Dominguez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2600, 'Hugo Roel Mejía Perdomo', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2601, 'Iris  Anabel Melgar', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2602, 'Jaret  Raul Sanchez Maldonado', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2603, 'Josue David Arita .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2604, 'Marcos  Antonio Gamero  Rojas', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2605, 'Melania Paola Calderon Del Cid', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2607, 'Miguel  Angel Monroy Well', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2608, 'JUAN CARLOS CANALES GODOY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2609, 'KEVIN  FRANCISCO FLORES VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2610, 'GEOVANNY  SAMAEL VASQUEZ AGUILERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2611, 'GUSTAVO JOSUE CANALES OQUELI', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2612, 'Elmer  Josúe  López  Romero ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2613, 'Fernanda  Nicolle  Carranza  Ulloa ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2614, 'Heylin Josseline  Lagos  Cardona ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2616, 'Marvin Edgardo  Velasquez Mejía ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2617, 'Hery  Omar  Perez  Lemus ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2618, 'Julio  Cesar  Rivera  Reyes ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2619, 'Nimia  Yamileth Saenz Pineda ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2621, 'Teresa Jazmin Cantiyano Sanchez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2622, 'Ashleyn  Jatzary  Tercero  Amaya ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2623, 'Dadier  Odair  Chavez  Castro ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2624, 'Obdulio Mauricio Ulloa  Carbajal  ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2625, 'Yunior Alexander Maldonado Mejía ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2626, 'Oscar Rodrigo López  Paz', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2628, 'Bessy  Jasary  Aguilera  Mendez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2630, 'CECILIA MICHELLE CHAVEZ GUTIERREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2631, 'MARIELA LIZETH SALINAS  AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2632, 'MARKZELLA HUGETH RUIZ BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2633, 'BAYRON JOSUE ESTRADA  ARDON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2634, 'OLVIN ESAU MOREL VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2635, 'SOPHIA POULLETH MORENO SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2636, 'JENIFER GABRIELA VELASQUEZ PALMA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2637, 'MILDRED NOHELY FONSECA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2639, 'CESIA JULISSA FIGUEROA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2640, 'GRACIE STEPHANIE BARJUN EUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2641, 'ANGIE LIZZETTE TORRES MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2642, 'SEIDY NINOSKA ZAVALA MATAMOROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2643, 'LESVI OBEIDA LOPEZ ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2644, 'ALEXANDRA EUNICE MARTINEZ PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2645, 'CAROLINA GISSEL OSORIO BRICEÑO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2646, 'NELSON OMAR FLORES ORTEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2647, 'ELIEZER ESAU RODRIGUEZ CARDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2648, 'NERY EDGARDO ROMERO MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2649, 'ELENA GISEL CARDENAS LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2650, 'PEDRO LUIS CARDONA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2651, 'DAVID EDGARDO RODEZNO ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2653, 'DARWIN RENE BUSTILLO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2654, 'LUIS  FERNANDO HERNANDEZ REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2655, 'MITZI CAROLINA MEDINA ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2656, 'DANIEL ALEJANDRO MALDONADO PARADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2657, 'DANIEL ALEJANDRO MENCIA RUBIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2658, 'JENIFER XIOMARA LOZANO VALDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2659, 'ERIKSON  VEGA JACOME', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2660, 'NERY YAMILETH LOPEZ BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2661, 'LICIDA DEL CARMEN ULLOA CABALLERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2662, 'ANDREA MARIA REYES DEGRANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2663, 'DIANA YADIRA DEGRANDEZ AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2664, 'ERIK  FERNANDO YANES CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2665, 'STEFANY YAMILETH NAVAS ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2666, 'KASLA YELENA SUAZO SARAVIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2667, 'ALLYM  GRACIELA QUEVEDO ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2668, 'ROSA MARIA FLORES ESPINAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2669, 'DELMIS YADIRA GOMEZ CANTARERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2670, 'MARIA  JOSE MATUTE MORAZAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2671, 'MARIA  JOSE MIDENCE AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2672, 'STEPHANY CAROLINA CASTRO AUGUSTINUS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2673, 'JOSE LUIS IZAGUIRRE BENITEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2674, 'HEYDI MELISSA VARELA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2675, 'HEYMI  LIZZETTE GUTIERREZ BURGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2676, 'JOHANNA MIREYA REYES VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2677, 'ADELA KARINA SABILLON MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2678, 'ANDREA ELOISA AMAYA VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2679, 'ELVIN JOSE MARTINEZ ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2680, 'DIANA JULISSA SORIANO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2681, 'IRMA PAOLA GOMEZ SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2682, 'IRENE BEXAI ROMERO MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2683, 'ROBERTH EDUARDO VALLECILLO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2684, 'JOSELYN DAYANA RODRIGUEZ BERRIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2685, 'GERIZIM IDALIA RODRIGUEZ VALLADAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2686, 'ZABDI DAGOBERTO CASTELLANOS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2687, 'CARLO FERNANDO NUÑEZ CARBAJAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2688, 'GRECIA YAHELI CABALLERO TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2689, 'CARLOS FERNANDO AMAYA ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2690, 'DANY GERARDO ARDON PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2691, 'ARMANDO FAVIAN ROMERO MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2692, 'WILMA FABIOLA LOBO NUÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2693, 'ALICE YERLINDA GUITY BAQUEDANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2694, 'RUBY LORENA FLORES BUCARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2695, 'SHERIDAN RUBENIA VASQUEZ MEDRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2696, 'JOSSIE GAMALIEL GONZALEZ VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2697, 'KARLA LIZETH RAMIREZ LORENZANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2698, 'JOSE ALFREDO  RAUDALES GUTIERREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2699, 'PHALON  MELISSA REYES DEGRANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2701, 'CELIO FERNANDO FERRERA LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2703, 'UVALDO CESARANY CRUZ VILLATORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2704, 'SANDRA ROSIBEL AMADOR RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2705, 'ROGER BAYARDO MURILLO ALCÁNTARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2707, 'GABRIELA ALEJANDRA LOPEZ DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2709, 'KARLA  PATRICIA MARTINEZ BORJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2710, 'CARLOS ROBERTO COELLO ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2720, 'ANYI SCARLETH CRUZ GONZALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2721, 'JEOVANNY FRANCISCO MUÑOZ RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2722, 'JORGE MIGUEL MURILLO ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2723, 'CARLOS ROBERTO RODRIGUEZ ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2724, 'NELSY ARASELY CACERES AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2725, 'MAYURI GICELA MARTINEZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2726, 'CECILIA NOREY CRUZ MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2727, 'KEILY NOEMI LOPEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2728, 'JORGE LUIS RODRIGUEZ  VALDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2729, 'MARVIN OMAR AGUILAR ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2730, 'ESCARLETH YADIRA NUÑEZ ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2731, 'SELVIN  PAGOAGA BRITO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2732, 'CARLOS ARTURO RAMOS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2733, 'TIFANY NALLELY GALVEZ CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2734, 'LUIS HENRIQUE CRUZ LICONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2735, 'ANTONY MICHAEL CANALES CACERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2736, 'CLAUDIA STEFANY MATUTE  CARBAJAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2737, 'DARIO FRANCISCO CRUZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2738, 'MIRNA YOHANA SORIANO PALMA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2739, 'NORMA YOSSELIN GONZALES MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2740, 'TEDDY ALEJANDRO MEJIA ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2741, 'YUDIS MARIA GALLEGOS NAVARRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2742, 'DANIA VICTORIA MEJIA MURILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2743, 'DALIA MARISOL TORRES HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2745, 'MIXAR ELI AGURCIA CABALLERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2748, 'JOSE RAUL OCHOA MOLINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2749, 'ZAMIR ADOLFO SOTO HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2750, 'FELIX ADRIAN COLINDRES HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2751, 'DEBIR CALEB AVILEZ PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2752, 'JOSMARY NOELY CRUZ VILLATORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2753, 'REMBERTO  ASTUL BARAHONA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2754, 'IRIS MARLENE RECONCO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2755, 'ASTRID JUDITH COELLO TROCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2756, 'HECTOR  JOSUE VALDEZ CABRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2757, 'LUIS  ENRIQUE MURILLO CACERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2758, 'GENESIS MICHELL MOLINA BORJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2759, 'EDWIN ARON MARTINEZ CABRERA', 1, 1);
INSERT INTO `tbl_numeroempleado` VALUES (2760, 'JOSUE SAMAEL BANEGAS RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2761, 'DAVID ALBERTO FUENTES ANARIBA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2762, 'ANGELICA MARIA LICONA CARTAGENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2763, 'CARMENZA MARIA MARTINEZ HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2764, 'EDGAR ANTONIO TORRES MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2765, 'DARLING EUNICE UMANZOR BAUTISTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2767, 'NADIA DIAMANTINA MURILLO ALCANTARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2768, 'JULIO  CESAR LOPEZ PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2769, 'DELMER JOSIEL MEDINA TORREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2770, 'WILIAN RONEY MENDOZA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2771, 'CLAUDIA CAROLINA BORJAS RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2772, 'KASSANDRA NICOLE BUSTILLO DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2773, 'YADIRA  LIZETH CABRERA  ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2774, 'JOSE  ARNOLDO CORRALES ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2775, 'GENESIS YARAMIS ORELLANA PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2776, 'YENNY SUYAPA QUIROZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2777, 'MARCO ANTONIO CASTELLANOS HERRERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2778, 'JOSSELYN PAOLA ANTUNEZ MORALEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2779, 'GERSON DANIEL MEMBREÑO PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2780, 'JULIO SAMUEL COELLO .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2781, 'GERLIN ALEJANDRO ZUNIGA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2782, 'ANYI ELIANA CABALLERO VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2783, 'LUIS FERNANDO ESCOBAR SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2784, 'ERNESTO DAVID CARCAMO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2785, 'CARMEN GABRIELA CARIAS CABALLERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2788, 'DAINA VANESSA CONTRERAS LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2790, 'ELVIA BALESKA MURILLO LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2791, 'ALEXI DAVID RAMOS ALDANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2792, 'FANNY YOLIBETH RAMOS CALIX', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2794, 'KEVIN CECILIO CASCO PERDOMO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2795, 'ANGGIE VANESSA GONZALES MACHADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2796, 'MIRTZA ANDREINA ULLOA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2797, 'MARCELO DE JESUS GALLARDO SABIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2798, 'CARMEN SUYAPA RUDON ARITA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2800, 'ROSBI ENRIQUE ESTRADA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2802, 'LOURDES ARCENIA ORTIZ TREJO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2803, 'BETHY JOHANA ZELAYA JIMENEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2804, 'LUIS  MANUEL PALMA  ORDOÑEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2805, 'JEIDI MARSELA PAYAN MENDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2806, 'JUAN  JOSE  CACERES MATUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2809, 'IRENE BETZABE REYES RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2810, 'YEIMI  DANELIA SANCHEZ VILCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2811, 'EDNA DARIELA AGUIRRE RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2812, 'ANA  PAOLA FLORES CALDERON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2813, 'ZAMARELEE WALDINA CARIAS PADILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2814, 'RAQUEL  LOPEZ MENDOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2815, 'SAMIA  CLARISSA RECONCO  CACERES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2816, 'MARIELA ISABEL  PERDOMO CASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2817, 'IRIS JACKELINE PAZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2818, 'LESLY  KAROLINA TORRES ORTEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2819, 'EDWIN  OMAR MORALES RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2820, 'MELIDA ESTELA ESPINOZA MATUTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2821, 'CRISTY BANESSA CRUZ DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2822, 'MANUEL DE JESUS LICONA GARRIOD', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2823, 'ROSA ANGELICA GONZALES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2824, 'JOSUE ORLANDO GONZALES CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2825, 'EDIN GERARDO MARTINEZ LICONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2826, 'YANSSI YOCSARY ORTIZ LICONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2827, 'BRAYAN JOSUE MILLA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2828, 'BELQUIS YOJANI CHAVARRIA CALLES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2885, 'CELENIA DEL CARMEN CARRASCO GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (9898, 'MICHAEL OWEN BRAUN COWEL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (9993, 'SANTOS ISRAEL CHIRINOS COELLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (26613, 'VIVIAN ALEXANDRA ALVARADO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1004, 'NILIA LILIANA HERNANDEZ OSEGUERA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1005, 'BLANCA MERCEDES RIVAS DOBLADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1006, 'BANY DANESSY ALVARENGA PADILLA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1007, 'EVERANGER  CASTILLO CRUZ', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1008, 'ANDREA YORLIBETH AGUILERA MEJIA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1009, 'KRITZA MARBETH FUNEZ RODRIGUEZ', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1017, 'CRISTINO EDUARDO CERRATO ESPINAL', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1021, 'FRANCISCO JAVIER GUIFARRO PADILLA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1023, 'MOISES ANTONIO RODRIGUEZ DEGRANDEZ', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1025, 'JOSE ADALBERTO DIAZ ACOSTA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1028, 'YOLANDA DEL CARMEN PEREZ MOLINA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1029, 'GASBY  VILLATORO JACOME', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1031, 'LENAR NAZARETH CERRATO MIRALDA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1032, 'CRISTIAN NOEL CANALES ZAMBRANO', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1033, 'EDER JOSUE ALVARADO MORALES', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1035, 'DENIS EXZEQUIEL GARCIA GARCIA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1036, 'ISMAEL ANTONIO LOPEZ LOPEZ', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1039, 'CARLOS ROBERTO ZAPATA BANEGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1040, 'WILMER ALEXANDER CASTILLO MOLINA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1042, 'EDWIN MIGUEL BAQUEDANO AVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1044, 'ALEXA XOMAIRA AVILA FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1046, 'ALISON GABRIELA MONCADA ÁVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1050, 'ANGEL DAVID RAMOS FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1051, 'ANGÉLICA MARÍA MOLINA CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1052, 'BAYRON JOSUÉ PERDOMO CHÁVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1053, 'BERNARD EDUARDO GODOY ANDINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1054, 'CARMEN CECILIA SEVILLA FÚNEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1057, 'CELEO FRANCISCO MOLINA BONES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1058, 'CINTHIA LETICIA OSORTO AVILÉZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1059, 'CLARISSA MICHELLE DÍAZ CÓRDOVA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1060, 'CLAUDIA YAMILETH SOTO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1062, 'DAILIN ELIZABETH ALVARADO CASTRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1063, 'DANIA JACKELIN GONZÁLES MONTECINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1064, 'DANIA MERCEDES MOLINA ZELAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1065, 'DARIO JOSÉ SÁNCHEZ VILLAFRANCA', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1066, 'DAVID ABRAHAM RUÍZ ZAVALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1067, 'DAVID ALBERTO MÁRQUEZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1069, 'DAYSI ISABEL ROUSSEL OYUELA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1070, 'DENIA YADIRA OSORTO MALDONADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1071, 'DORIS JULIBETH CHINCHILLA MURILLO', 0, 1);
INSERT INTO `tbl_numeroempleado` VALUES (1072, 'DUNIA JUDITH HERNÁNDEZ CASTELLÓN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1074, 'EDWIN JOSUÉ AUXUME ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1075, 'ELVIA ROSA NAVAS ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1076, 'ERICK EDGARDO ESTÉVEZ ORELLANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1078, 'ESTEFANA JANETH PINEDA ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1081, 'FRANCISCO ALEJANDRO HERNÁNDEZ AGUIRRE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1082, 'GABRIELA ALEJANDRA ELVIR ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1083, 'GLORIA VANESSA BANEGAS ROSALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1084, 'GLORIA VIRGINIA MEDINA ÚCLES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1085, 'GUSTAVO ADOLFO SOSA LÓPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1087, 'HELLEN GABRIELA PALMA CANALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1090, 'ISIS LUCIA MATUTE HERNÁNDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1091, 'IVIS ZARINA MARCÍA RODRÍGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1092, 'JAMNIA PAOLA CERNA BOURDETH', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1093, 'JARED IVAN ARRIAGA RUÍZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1094, 'JOEL ENRIQUE HERNÁNDEZ RAUDALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1095, 'JOHNNY  CASTRO FUNES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1103, 'KAREN GABRIELA ESTRADA ZÚNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1104, 'KAROL MARITZA RICO RIVAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1105, 'KAROL PATRICIA SÁNCHEZ CARRANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1106, 'KATHERINE GISELLE ORTEGA MORENO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1107, 'KATHERINE PAMELA PINEDA VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1108, 'KATLEEN JULIETH BACA ACOSTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1109, 'KELIN YANORIS FLORES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1110, 'KEVIN ORLEN RIVERA VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1111, 'LAURA LETICIA NÚÑEZ ISIDRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1113, 'LESLY CAROLINA SILVA ACOSTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1114, 'LICYN KARINA CASTELLÓN SOLÓRZANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1116, 'LINDA SUYAPA CANALES ANDINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1117, 'LOURDES SUYAPA SUAZO RÁPALO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1118, 'MABELLY ZOBEYDA IZAGUIRRE LEÓN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1121, 'MARÍA ELENA SANTOS SÁNCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1122, 'MARIA JOSÉ QUIJANO VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1123, 'MARLLALY GABRIELA ZÚNIGA CASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1125, 'MERCEDES CAROLINA CARDOZA LAGOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1130, 'NORA CECILIA MONTOYA BACA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1131, 'NORMA TATIANA MARADIAGA SAUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1132, 'OLVIN RENIERY GODOY FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1134, 'OSCAR EDUARDO HERNÁNDEZ ZÚNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1135, 'OSCAR LEONEL ALVARADO FIALLOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1136, 'OSMAN ISAAC MAZARIEGOS ZAPATA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1137, 'OZZIE DANIEL MANZANO BULNES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1138, 'RAMON VIRGILIO GUNERA AGÜERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1140, 'RENE ISMAEL HERRERA PONCE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1141, 'RICARDO ALFREDO CERRATO GENOVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1142, 'RONALD JOSÉ VARELA RÍOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1143, 'RONY GERARDO ANDINO ERAZO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1144, 'SANDRA BERNARDA GÓNZALES AGUILERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1145, 'SANDRA MELISSA SALINAS MEDINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1147, 'STEPHANNY YARELI CERRATO LÓPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1148, 'TANIA MICHELLE SOSA LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1149, 'TREASY JASMYN JUÁREZ PADILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1151, 'WALESKA MIREYA TRIMINIO CERRATO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1152, 'WENDY MARICELA LÓPEZ ZÚNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1153, 'YESY MARLENEE RODAS MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1154, 'YOSELIN LIBETH ORDÓÑEZ CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1155, 'ALBERTO JONATHAN VALLE ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1156, 'ANA GABRIELA OCHOA MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1157, 'ANA KARINA MONTIEL ESCOTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1159, 'ANYI TRINIDAD RIVAS CANALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1160, 'ARNOL  GONZÁLEZ MEJÍA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1161, 'JOSE NORMAN MEDINA ZUNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1162, 'BESSY YOHANNA MARTÍNEZ MEJÍA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1163, 'BETY YOJANA SUARES HERNÁNDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1164, 'BLANCA GISELA VILLALOBOS HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1165, 'BRENDA ROXANA SAUCEDA CÁCERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1166, 'BRYAN GABRIEL VALLADARES CARRANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1167, 'CARLOS DAVID LAGOS FONSECA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1168, 'CARMEN ELISA LANZA AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1169, 'CATHERINE YAMILETH SANTOS VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1170, 'CESAR ANDRES MELENDEZ SANDRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1171, 'CESAR ESAUL TEJEDA ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1174, 'CHRISTIAN ALEXANDER NUÑEZ LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1175, 'CLAUDIA YACKELINE ACOSTA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1176, 'CLAUDIO IVÁN HENRÍQUEZ CÁRDENAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1177, 'DANIEL ANTONIO SALGADO SAUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1179, 'DULCE MARÍA MARTÍNEZ HENRÍQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1182, 'EDUARDO DAVID MALDONANO VALLEJO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1183, 'EDUARDO  OSEGUERA SUAZO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1184, 'EDWIN GEOVANY AMADOR VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1185, 'ELMER JOSÉ ESPINAL CHÁVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1187, 'FRANCISCO JAVIER CRUZ VELÁSQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1189, 'GISSELA ALEJANDRA CHAVEZ VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1190, 'GROSBIN EDGARDO BONILLA NUÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1193, 'HEBERT MISAEL ELVIR CASTRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1195, 'HEYDI PAOLA RODRIGUEZ LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1197, 'HILDA YAMILETH SOTO PAVON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1198, 'INDIRA SARAHI MEZA MOREIRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1199, 'INGRID NOELGA GONZALES BACA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1200, 'JAIRON JOEL ANDINO PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1201, 'JERSON FAURICIO ZAVALA FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1202, 'JESUS EDGARDO VILLALTA BARAHORA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1203, 'JONATHAN DANIEL MARTINEZ LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1205, 'JOSE ALEXIS CRUZ RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1206, 'JOSE CARLOS CORDERO CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1207, 'JUAN CARLOS GODOY OSORIO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1208, 'JUAN CARLOS SIERRA LIZARDO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1210, 'KELIN JANETH CANALES MALDONADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1212, 'KENIA VANESSA MALDONADO TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1213, 'KIMBERLY MELISSA QUIRÓZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1214, 'LEISY WALESKA FERRERA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1215, 'LOYDA IVETH DOMÍNGUEZ MEJÍA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1216, 'LUIS ANTONIO AMADOR FIGUEROA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1217, 'LUIS ERNESTO ALVAREZ AMAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1218, 'LUIS FERNANDO VALLADARES SIERRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1219, 'MARTHA JAMILETH TURCIOS HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1220, 'MARTHA JUDITH BARAHONA GAITAN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1221, 'MARTHA MARÍA ALVARADO RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1222, 'MARVIN ABEL CHIRINOS RIVAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1223, 'MARYORIE CRISSEL RAMÍREZ MEJÍA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1224, 'MAYRA ELIZABET CANALES HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1225, 'MAYRA KARINA ARIAS FERRUFINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1226, 'MELANY LIDENNY COLINDRES CERRATO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1227, 'MERCEDES ISABEL SALVADOR PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1229, 'MIRIAM OFELIA HERNANDEZ IRIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1230, 'MODESTO ANTONIO MEDINA JUANEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1231, 'NADIA CAROLINA CERRATO DÍAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1233, 'PAMELA JAQUELINE COELLO VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1235, 'RICARDO DAVID POSADAS ÁLVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1236, 'SERGIO ALEJANDRO CANALES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1237, 'SIHAM  ASFURA GAVARRETE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1238, 'SILVIA SOFIA OCHOA PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1240, 'SILVIA ZULEMA HERNÁNDEZ DURÓN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1241, 'SINDY ALEJANDRA ARGEÑAL CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1242, 'SOANY GABRIELA BONILLA MAIRENA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1243, 'STEFANNY MICHELLE CHAVEZ GUIDO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1244, 'TANIA SARAHY SUAZO CERRATO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1247, 'YANSEN FABIOLA AVILA UCLES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1249, 'YESSICA PATRICIA AGUILERA HERNÁNDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1250, 'YUILAN  HERNÁNDEZ ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1251, 'YURY YARITZA GUNERA ELVIR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1255, 'CARLOS ENRIQUE MARADIAGA LEZAMA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1256, 'FABRICIO EDUARDO ZUNIGA VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1257, 'CATI YOJANA ORDOÑEZ CHAVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1258, 'CATHERINE ELIZABETH BETANCOURTH RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1259, 'ESTEPHANIE CAROLINA CERRATO LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1260, 'KATYA MARCELA MEDINA SANDRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1261, 'MARIAN JULLIETTE CALIX TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1263, 'CARLOS FERNANDO TRABANINO VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1264, 'ALESSIA MARISOL LAINEZ AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1265, 'JOSE MARIO JIMENEZ ALFARO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1267, 'ANGY BELGINY VENTURA HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1270, 'RONY ADALID GARCIA GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1272, 'CECILIA MARIA CACERES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1273, 'PAOLA MARIA SIERRA DEL CID ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1274, 'JONATHAN FABRICIO ALBERTO MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1275, 'EMIL JAVIER ARGUETA AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1276, 'GLENDA ROXANA RODRIGUEZ HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1277, 'IVAN ALBERTO MENDEZ MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1278, 'CARLOS DYLAN ESTRADA MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1279, 'JIMMY ALEXANDER LOPEZ REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1280, 'MARVIN ISMAEL LOPEZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1281, 'OSCAR LUIS CORDOVA LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1283, 'WILIAN EDUARDO VARGAS FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1284, 'KARENN NINOSKA LAGOS VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1285, 'MAC OLIVER CABRERA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1287, 'MARCO ANTONIO CABALLERO ZAPATA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1288, 'DARWIN ENMANUEL CASTAÑEDA MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1289, 'CARLOS EMILIO PINTO GUERRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1291, 'LINDA REBECA GARMENDIA MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1292, 'ELIUD ISAI ESTRADA CACERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1293, 'LAURA DAMARIS ALVARADO MORALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1294, 'DORIS CELENE MENDOZA MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1295, 'BLANCA AZUCENA COLINDRES SALGADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1296, 'DAVID ELIAZAR SOTO TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1297, 'HUBENER RAMON ORDOÑEZ DOMINGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1298, 'OSMAN LEONEL REYES PAVON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1301, 'GUSTAVO ADOLFO URRUTIA AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1303, 'ARTHUR ALEXANDER BENAVIDES URBINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1306, 'DANIEL  VILLATORO JACOME', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1307, 'ROSA LESBIA JIMENEZ GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1308, 'GEOVANNY FRANCISCO BUSTILLO GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1309, 'CRISTIAN ARIEL GONZALES CERRATO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1310, 'CHRISTOPHER ORLANDO FLORES ALVARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1311, 'RAMON DE JESUS  CAMBAR REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1312, 'CESIA JEMINA ALVARADO RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1313, 'JARITZA MELANY MALDONADO BENITES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1316, 'CESAR AUGUSTO AMADOR NUÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1317, 'DENNYS RAINEL MEJIA LAINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1320, 'EDA PATRICIA RODRIGUEZ CHIRINOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1321, 'ANGUIE JULISSA MORAZAN LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1322, 'MALENY MARISSA PONCE GONZALEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1323, 'OSCAR EMMANUEL ZAVALA MEDRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1324, 'LIDIA ALEJANDRA RODRIGUEZ SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1325, 'EFREN EDGARDO AMADOR RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1327, 'KIMBERLYN JISSEL MORENO MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1328, 'JORGE LUIS CERVANTES SERRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1329, 'BESSY AMARILIZZ SALGADO VILLELA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1330, 'PERLA MARIELA RODRIGUEZ ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1331, 'JORGE LUIS DIAZ GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1332, 'JOHANELY DORITZEL TREJO RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1333, 'ALEX ALFREDO PINEDA CANELAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1334, 'ROSA MIREYA RIVERA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1335, 'THARIN YURENI DUARTE GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1336, 'JONATHAN BENJAMIN OLIVA SALINAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1337, 'IRIS CLAUDET CARDOZA RECONCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1338, 'FATIMA MARIA CERRATO SIERRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1339, 'GUSTAVO ALEJANDRO VELASQUEZ MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1340, 'JUAN MARTIN MENDEZ HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1341, 'FRANKLIN ALEXANDER AMAYA ARGUETA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1342, 'KENIA JULISSA CRUZ CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1343, 'CARLOS EDUARDO ANDINO TURCIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1344, 'EDWIN ALFREDO VASQUEZ PAVON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1345, 'RICARDO ANTONIO FLORES VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1346, 'ALLAN JOSUE RODRIGUEZ OSORIO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1348, 'DIANA DEL CARMEN BANEGAS GUARDIOLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1349, 'MARELYN LETICIA LOPEZ RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1350, 'FRANCISCO JAVIER GOMEZ GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1354, 'ROLANDO JOSE MARTINES MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1355, 'OLMAN ISRAEL CERRATO BANEGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1357, 'KATYA IVETH LANZA MELGAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1358, 'CARLOS MANUEL LOPEZ TURCIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1359, 'MANUEL EDUARDO AGUILERA ESTRADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1360, 'EDWIN DONALDO MOLINA ZELAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1362, 'SANTOS MAXIMINO MARTINEZ ANDINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1363, 'FERMIN  AGUILERA CARRASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1366, 'ROCIO ARELI SARAVIA HENRIQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1367, 'RITZA MARGARITA FLORES VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1370, 'STEPHANIA RAQUEL RODRIGUEZ MARADIAGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1371, 'OLGA KARELIA NAVARRO MIDENCE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1372, 'SUCETH GISSELT ROSALES GIRON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1374, 'EVELIN ARGELIA CAÑAS MONTALVAN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1377, 'JUNIOR GERARDO OSORIO BARRIENTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1380, 'CANDIDO ALCIDES OSORTO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1385, 'CARLOS FERNANDO GUZMAN ESPINOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1386, 'CARLOS JAVIER AGUIRRE ALVARENGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1387, 'ERICK IVAN COTO RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1388, 'GENARO ALBERTO MEJIA PORTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1391, 'JOSE ALBERTO MEJIA MURCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1392, 'JOSE MILTON LOPEZ EUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1393, 'JOSE SAMUEL RAMIREZ RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1394, 'JULYSA MARILYN CABRERA ACOSTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1395, 'KARINA PAOLA MEJIA CARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1397, 'LUIS FERNANDO MIRANDA CANELO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1398, 'MARIA TEREZA PINEDA MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1400, 'MAYRA REBECA BLANCO QUINTERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1404, 'SKARLETH JOHANNA MARTINEZ ECHEVERRIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1405, 'SUYAPA TERESA BU BORJAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1406, 'ANA KARINA RIVERA REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1407, 'CARLOS EDUARDO MAIRENA ENAMORADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1411, 'FATIMA BEATRIZ SUAZO ALVARADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1412, 'GATSBY JASMIN LOPEZ MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1413, 'GISELA ESPERANZA CRUZ VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1415, 'JUAN CARLOS HERCULES MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1416, 'KENIA CAROLINA RAMIREZ ARGUETA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1417, 'LUIS ROBERTO REYES LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1419, 'MIGUEL ANTONIO SUAZO HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1420, 'NOHE OMAR CERRATO RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1421, 'ONELMA CATALINA SANCHEZ ULLOA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1422, 'PAUL FRANCISCO BARAHONA ROSALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1423, 'PEDRO MEDRANO FUNEZ ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1425, 'RUTH ARACELY MARTINEZ VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1428, 'WENDY  FUENTES TOVAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1430, 'YESSICA  FONSECA ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1431, 'ANDY ZURIEL MATAMOROS FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1433, 'ERNESTO ADOLFO TABORA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1437, 'HENRY SAMUEL REYES CHINCHILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1438, 'JOHNNY ALEXANDER VINDEL SERRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1442, 'MARTHA GABRIELA CERRANO MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1445, 'MYRYAM AZALIA MARTINEZ MAJANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1446, 'OSCAR JAVIER CASTELLANOS PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1448, 'REINA MARIA ROJAS PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1450, 'RENE HUMBERTO CASTELLANOS BLANCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1452, 'ROLANDO ANIBAL CACERES ULLOA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1455, 'TELMA DINORA AVILES OSEGUERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1457, 'WENDY CAROLINA DOBLADO CASTELLANOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1459, 'ALECK EDUARDO FONG DUARTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1460, 'ALFREDO HERNAN ALVARADO MADRID', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1461, 'ANDREA SCARLETT BARAHONA FERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1463, 'CARLOS DANIEL FIGUEROA TRUJILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1464, 'CHEYLA MARINA SOLIS CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1465, 'DORIAN ARLETTE COLINDRES SANTAMARIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1466, 'ERICK GUSTAVO VELASQUEZ PEÑA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1467, 'ERIKA DEL CARMEN SORIANO SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1468, 'FATIMA WALESKA TABORA AYALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1470, 'HEVER GEOVANNY CASTILLO VALLE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1471, 'IVIS ORLANDO CONTRERAS ROSALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1472, 'JENNY GABRIELA ULLOA GALVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1473, 'JUAN MIGUEL AGURCIA ESPINOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1474, 'KAREN MELISSA AGUIRIANO SALINAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1475, 'KARINA ANTONIA GUZMAN CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1476, 'KATERIN ESTEFANY VELASQUEZ GARAY', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1477, 'KEYLI ARACELY VENEGAS MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1478, 'LILIANA EDITH ROMERO ESCOBAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1480, 'NORMA YANETH MOLINA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1481, 'OLGA PATRICIA LAGOS COLINDRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1482, 'OSCAR ALEXIS ORTEGA REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1483, 'RAFAEL ANGEL UGARTE BONILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1485, 'ROGER JUSTO MUNGUIA ORELLANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1488, 'ANA SOFIA CHÁVEZ RUÍZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1489, 'ANDRES ADONAI MATUTE PUERTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1493, 'GABRIELA CAROLINA SANCHEZ REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1494, 'HAROL JOSUE OSORIO MEZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1497, 'IVIS REYNALDO ALMENDAREZ PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1500, 'JESUS HUMBERTO MARADIAGA CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1502, 'NATTALY VANESSA LAGOS ANDRADE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1504, 'RAMON ALEXANDER MORALES GIRON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1505, 'ROGER ELÍ CASTELLANOS MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1508, 'BELKIS ESTEFANI GARCIA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1509, 'ANGIE STEPHANIE BONILLA HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1510, 'BRYAN RICARDO MENDOZA SALGADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1511, 'COLLINS FRANSHA DOMINGUEZ CONCEPCION', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1513, 'HECTOR EMILIO CASTELLANOS LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1514, 'HEEDY YOELY GARCIA RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1516, 'JOHAN JOSEPH GARCIA FERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1517, 'JOSE EDUARDO VELASQUEZ CALIX', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1518, 'JULIO ENRIQUE PAZ MACHORRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1519, 'KATERYN VANESSA SABILLON CANALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1520, 'KATHERINE GISELLE KATTAN FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1523, 'MARTHA CECILIA HERNANDEZ HENRIQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1524, 'NORMA ELISA LICONA NUÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1525, 'ROXANA VANESA AYALA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1526, 'SOFIA YAMILETH AZUCENA ARGUETA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1527, 'VICTOR MANUEL GUARDADO ESCALANTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1529, 'ALLAN JAVIER GUARDADO GUEVARA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1530, 'AMILCAR JOSUE AREAS ANDURAY', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1531, 'ANA JULIA ZELAYA ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1533, 'ASTRID GISSEL LOPEZ PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1534, 'BELKYS DALISEY DIAZ RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1538, 'JAVIER OSMAN LOPEZ TROCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1540, 'KATHERINE VANESSA DOBLADO CASTELLANOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1542, 'MIGUEL ANGEL LOPEZ MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1544, 'NOLVIN EFREN ROMERO DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1546, 'REINA ARGENTINA ALVAREZ PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1552, 'CINDY PAOLA MARTINEZ CARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1553, 'EDNA CECILIA VARGAS SANTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1554, 'GREISY MAUDELY GUZMAN AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1557, 'JESUS ALBERTO SANABRIA SANABRIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1558, 'JOSUE DAVID SABILLON ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1559, 'JUAN DANIEL CANTILLANO HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1560, 'JULIA ALEJANDRA SOLANO MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1562, 'MERARY ELIZABETH PEÑA COTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1563, 'NORMA YOLANDA PAZ TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1564, 'SAMUEL ISAI MEJIA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1565, 'SENIA PETRONA VARGAS LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1566, 'VERONICA JOSSELIN DAVIS SARAVIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1568, 'WENDY JULISSA ALCANTARA RIVAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1571, 'KEVIN HERNAN CISNEROS PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1572, 'CELIA MARLENY LOPEZ MORALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1573, 'JONY ALFONSO LUNA PORTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1575, 'GERARDO ALFREDO AJURIA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1576, 'JOSE DAVID ORTIZ MONTERROSA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1577, 'BRENDA SUYAPA MERCADO RIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1578, 'OSCAR BENJAMIN SORIANO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1579, 'KAREN ALEJANDRA PINEDA FERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1580, 'FERMIN  LAINEZ IRIARTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1581, 'MARCO ANTONIO MENDEZ ABREGO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1582, 'WILSON GEOVANNY ORDOÑEZ ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1583, 'ELVIS ENRIQUE MORALES VALDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1584, 'ZINNIA DAMARIS LANZA GUZMAN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1585, 'WALESKA REGINA PEÑA LAGOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1588, 'GLADYS LARISA AMAYA PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1589, 'ANGEL ALEXIS ZAMORA MARIN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1590, 'ELSA NOEMI GARAY RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1591, 'YIMI JACKSON PERLA RIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1592, 'JORGE ARMANDO PERDOMO HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1593, 'JUAN CARLOS LOPEZ CARDONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1594, 'VICTOR NOE NUÑEZ SEURANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1595, 'MARBEL RENAN ALVARENGA MALDONADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1596, 'CRUZ ROLANDO COREA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1597, 'MAURICIO MOISES ANDINO SALGADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1598, 'EDILBERTO  DOBLADO SARMIENTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1599, 'ISRAEL  LOPEZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1601, 'FRANCISCO LEOPOLDO SANDOVAL RAUDALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1602, 'AQUILES GUILLERMO OLIVARES MORENO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1604, 'EDGAR FRANCISCO CARRANZA ORELLANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1605, 'MIGUEL ANGEL BURGOS BONILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1608, 'LIBNY ANNET FERNANDEZ GALVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1609, 'SAMUEL JOSUE MEJIA MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1610, 'KARINA  PINEDA HYNDS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1612, 'NATALIA MARIA MORGAN VILLEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1614, 'OMAR ELIDIO ROMERO MATAMOROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1618, 'REYNALDO ENRIQUE MATAMOROS BERTOT', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1621, 'WALTER ALONSO CALIX RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1622, 'VICTORIA ALEJANDRA VELASQUEZ ALVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1623, 'CRISTOBAL RENIERE VALLEJO MONTIEL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1625, 'REYNA SULEMA SOTO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1626, 'GRICELA MARIA ESCOTO URBINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1628, 'CARLOS EMILIO MARTINEZ ALVARADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1629, 'KELLIN ELENA ORTEGA COREA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1630, 'DAFNE GISSELLE FUENTES ZUNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1631, 'VICENZO SARUCCIO BALLETTA LARDIZABAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1633, 'ABRAHAN ELICEO ROMERO CASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1634, 'ALEXANDER DAVID MELENDEZ VALLE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1635, 'ALLAN ANTONIO LANZA TEJEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1636, 'ALLAN ROBERTO PAYNE DUARTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1637, 'ANA JISSEL SANCHEZ ANDINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1639, 'ANGELICA YANETH IRIAS LEMUS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1640, 'ANIBAL GERARDO PARADA MEDRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1641, 'ANNIE TATIANA SANTOS LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1642, 'ANTHONY JOSUE LOPEZ CAMBAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1643, 'CRISTHIAN ALEXIS TOVAR FIGUEROA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1645, 'DEBBY JAZZMIN NATIVI AMADOR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1646, 'DINA RAQUEL MEDINA QUIÑONEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1647, 'DIXIE CAROLINA MANCIA FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1649, 'FRANCISCO RENE RIVERA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1650, 'JOEL ALFREDO MARTINEZ ARTEAGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1651, 'JORGE ANDRES CACERES TABORA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1652, 'JOSE ADALBERTO URBINA MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1656, 'KELYN MARICELA ZUNIGA FUNES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1657, 'LAURA RAQUEL MURILLO BRICEÑO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1659, 'MARIO ISAU NUÑEZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1660, 'MONICA STEPHANY ESTRADA CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1661, 'OLGA BASILIA VALERIANO MARADIAGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1662, 'OLIVER ALBERTO CHIRINOS RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1663, 'OSCAR LORENZO SANCHEZ SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1664, 'PEDRO JOSUE SANTOS PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1665, 'ROBERTO CARLOS PINEDA AVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1666, 'ROLANDO JOSE BONILLA ZALDIVAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1667, 'RUBEN ANTONIO BONILLA ZALDIVAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1668, 'SOFIA XIOMARA NUÑEZ ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1670, 'TATIANA JULISSA BANEGAS FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1672, 'ALEJANDRA MARIA GARCIA FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1673, 'ANA SOLEDAD MEJIA PALACIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1674, 'GABRIELA LISBETH LAINEZ CARBAJAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1675, 'INGRID GERALDINNE HERRERA QUIÑONEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1676, 'JOHAN ALBERTO MONTOYA YANES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1677, 'KAREN VANESSA TURCIOS VARELA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1678, 'MEYSY JASSMYN COBOS ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1679, 'NARDA JULISSA JIMENEZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1680, 'RINA MARGARITA ACOSTA ALVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1681, 'SUSANA PATRICIA JIMENEZ ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1683, 'YANIBIS LILIBETH RAMOS CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1685, 'ESTEFHANE CHARLOTTE CACERES MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1687, 'JOSE MANUEL MORENO AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1688, 'JOSUE ALEXANDER BATTISTELLO CACERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1690, 'KATHERINE JOHANA NATAREN GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1693, 'WENDY CAROLINA RIVERA CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1694, 'RIGOBERTO  MENDOZA VALLECILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1695, 'CINDY STEFANY ORTEZ AVELAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1697, 'JEFFERSON DAVID RIVERA CARDONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1698, 'JUAN ANGEL FRANCO VENTURA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1699, 'OSCAR EDGARDO AGUILAR MOLINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1700, 'LEA SARAHI MEJIA BARRIENTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1701, 'BEYKY MAYAQUIN FAJARDO FERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1702, 'CLAUDIA YAMILETH ANDINO CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1704, 'EDGARDO ANTONIO GOMEZ VALERIANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1705, 'FANY LISSETH GARCIA BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1706, 'JOAN SAMUELS LAGOS OLIVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1708, 'MARVIN FELIPE GARCIA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1709, 'OSCAR DARIO DIAZ REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1710, 'EDUARDO FLORENTINO CASTELLANOS CLAROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1711, 'LOURDES MAYDELI PEREZ RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1712, 'WILDER ALFREDO JEREZANO ANDARA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1713, 'JOSUE MOISES BENITES AMAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1714, 'BRIANA IOLA DIAZ MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1716, 'GLORIA STHEFANNY LAINEZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1717, 'KAREN LIZZETH MURILLO CONTRERAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1718, 'LUIS FELIPE CARRANZA VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1723, 'VIENA CELYS FLORES CISNEROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1725, 'DENNIA YADIRA ULLOA GARAY', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1726, 'GISSELLE YAYLIL HERNANDEZ CARDONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1728, 'JUAN FRANCISCO PINEDA MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1729, 'LUZ PATRICIA ROMERO CHAVARRIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1730, 'NELLY SUYAPA ANDRADE MURILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1731, 'OSCAR OMAR COLINDRES RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1733, 'BESSY YESSENIA OCHOA CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1734, 'DIANA VANESSA REYES MONJE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1739, 'KARINA YOLIBETH CARCAMO PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1740, 'KENIA SARAHI LAGOS ESTRADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1742, 'VEBERLY IVETH CABRERA AMAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1743, 'ROBERTO ALEJANDRO LOPEZ GUERRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1744, 'KENCY JULISSA GODOY LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1745, 'CINTHIA MELISSA MELENDEZ AVELAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1746, 'JULISSA IVETH GIL COLINDRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1747, 'DINORA MELINA DOMINGUEZ PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1750, 'JOSE RAUL ARGUETA ANARIBA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1751, 'BERTA JULIA COELLO FIGUEROA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1752, 'BRAYAN DANIEL MERLO RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1753, 'ANA ANGELINA CONTRERAS GUERRA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1754, 'BRIAN ADONAY LOPEZ PERAZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1756, 'ERICK ROBERTO TABORA BONILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1757, 'HENNDY KARIELA VELASQUEZ DUARTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1758, 'MARIA ENGRACIA VALLEJO TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1759, 'MARIO ROBERTO VALLADARES MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1760, 'NICOL ALEXANDRA RAMIREZ URQUIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1761, 'OWEN SINUHE MERLO RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1762, 'PAULA ALEJANDRINA MENDOZA REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1764, 'KENSY LIZETH MARADIAGA BETANCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1765, 'JEYMI CAROLINA ORTIZ PERALTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1767, 'CARLOS ENRIQUE MOLINA INTERIANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1769, 'DORIS  DUBON CHAVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1770, 'RINA LIZETH GUZMAN ARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1772, 'KEYLIN LIZBETH GUEVARA MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1773, 'DIANA ISAMAR AMAYA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1775, 'SINDY CAROLINA ULLOA MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1777, 'NOE ISSAIAS CRUZ ORELLANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1778, 'GREYSI VERONICA COELLO TURCIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1779, 'YARLEN MICHELL FUENTES GONZALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1780, 'MARIA FURGENCIA PERAZA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1783, 'ANGIE KRISTELL FUENTES CARRASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1786, 'HECTOR MANUEL ARTEAGA DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1788, 'CATERINE BERSABE LARIOS ZUNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1792, 'FRANKLIN ANTONIO GOMEZ ROJAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1802, 'HILDA PAOLA PERDOMO LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1804, 'ANTHONY MAGDIEL ALEMAN ELVIR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1806, 'PAUL EDGARDO MALDONADO LAGOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1809, 'MAYRA MARCELA MALDONADO PINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1810, 'WILFREDO  MAIRENA ARTICA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1813, 'ALEX GEOVANY ORDOÑEZ LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1814, 'NORVIN ELIZABETH VALLE CASTELLON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1815, 'CARLOS ROBERTO OCHOA CHEVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1817, 'ISIS YORLENY BENITEZ CALIX', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1818, 'DAYANNA PAMELA JIMENEZ MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1819, 'PAULA MARINA VALERIANO CALLEJAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1820, 'JENIFFER WALESKA BULNES CARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1821, 'IRMA DAMARI ESPINOZA ESPINOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1822, 'EDYS ALEXANDER VELASQUEZ CANACA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1823, 'JOSE FRANCISCO MALDONADO CHAVARRIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1824, 'RUBIDIA GUILLEN ULLOA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1825, 'LEXEYDA WALESKA GARCIA VARELA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1827, 'MARIO ALBERTO REYES TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1828, 'EMANUEL ANTONIO GARCIA MARADIAGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1829, 'LIDIA DESIREE PINEDA SILVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1830, 'GRECIA NUOVY MARADIAGA BLANDIN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1833, 'JUDITH ELISA ORELLANA TROCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1834, 'MERARY ELIZABETH ARITA JUAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1835, 'SANDRA YAMILETH MENDOZA MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1837, 'JULIO CESAR RAMOS MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1838, 'NESTOR ANTONIO FUENTES MELENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1839, 'FREDY JOSE MONTOYA GALEAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1841, 'JUAN JOSE GARAY POSA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1843, 'EDWIN OMAR PEREZ AVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1845, 'SCARLETH PAOLA ERAZO GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1851, 'MARIO ANTONIO MEDINA ALVARADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1852, 'ANGELA POULETTE PERALTA MELENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1853, 'PAOLA VANESSA RODRIGUEZ MERCADAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1854, 'GEOVANNY ANTONIO CARRASCO GALO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1855, 'ADELA PRISCILA PAZ MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1856, 'OLMAN ANTONIO OCHOA GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1860, 'MODESTO  RODRIGUEZ ESPINAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1862, 'YESICA VALESKA GONZALES GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1863, 'ZENAIDA NOHEMY REYES HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1864, 'KEILA JOHANA PAVON GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1866, 'JORGE RUBEN OLIVA NUÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1868, 'CINTIA  PINEDA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1869, 'GUILLERMO ARTURO CORTES CHACON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1870, 'MIGUEL OMAR LOPEZ OVIEDO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1871, 'LILIAN CAROLINA PADGETT SILVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1872, 'BEDHER JOSE MANZANARES VALLADARES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1873, 'RICARDO RUBEN SANCHEZ QUIÑONEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1874, 'NELSON OSWALDO ESCALANTE PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1875, 'GUILLIAN SOGGEY OSEGUERA BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1876, 'DELIA LIZETH URBINA FUNEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1878, 'MARIA SUYAPA OVIEDO MEDINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1879, 'ADELA  MELGAR CONTRERAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1880, 'NIRYAN YISLEN COLOCHO SALGADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1881, 'CARLOS ALEXANDER OLIVA MANZANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1882, 'OLGA ANTONIA HASBUN MONTES DE OCA ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1883, 'ANA MAGDALENA RODRIGUEZ MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1884, 'DARWIN ALBERTO HERRERA HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1885, 'JUNIOR RENE RODRIGUEZ SARMIENTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1886, 'MELISA GABRIELA LORENZO RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1888, 'HELEN YARITZA FIGUEROA GARAY', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1889, 'JUAN CARLOS SOSA LOBO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1890, 'MARIO FERNANDO ARAGON DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1891, 'SUSAN GYSSELLE SILVA MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1892, 'IVIS MELISSA RIVAS ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1898, 'DILMA ROSIBEL MARADIAGA MARADIAGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1900, 'ALEXI ARNALDO VASQUEZ MANCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1902, 'JORGE ARMANDO VASQUEZ RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1903, 'EDWIN ALFREDO TORRES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1904, 'MARVIN YOVANY GIRON ACOSTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1905, 'YEFERSON ADONIS UCLES CHACON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1908, 'DARLENE GISSELL FERRERA LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1909, 'ALLAN JASSIR REYES LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1910, 'KAREN XIOMARA ESPINAL DOMINGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1911, 'SALVADOR GEOVANI CASTRO MONCADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1913, 'OMAR DAVID GIRON DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1914, 'VICKY ARYANI PINEDA PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1915, 'DANIA CAROLINA MATUTE RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1916, 'MARLON EDGARDO ROSALES MONCADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1917, 'DANIELA RAQUEL YANEZ PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1918, 'KAREN FABIOLA PINEDA ZALDIVAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1919, 'ALMA CECILIA FAJARDO BONILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1920, 'CRISTIAN JOSUE VILLALOBOS ESCOBAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1922, 'EDGARDO EMILSON SOTO PONCE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1923, 'MARCO LEONIDAS LARA LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1924, 'MILDRE VICTORIA MARADIAGA LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1925, 'KARLA ELISA MONTOYA MIRANDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1926, 'IRIS DANIELA RODRIGUEZ LARA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1927, 'PERLA ESTHEFANY MASS MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1928, 'MIRIAN ISABEL RAMIREZ MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1929, 'NAHUM FERNANDO OSEGUERA VILLALOBOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1931, 'ALEXIS JAVIER PADILLA ZAMBRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1932, 'SHERRY JANICE MENDEZ MORENO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1934, 'MARILYN JOHANA DURON HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1935, 'CRISTIAN JOSUE MORALES BUSTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1936, 'CESAR EDUARDO GARCIA VARELA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1937, 'ELISA YOSELLY VELASQUEZ AREVALO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1938, 'NANCY ALEJANDRA BARAHONA LICONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1939, 'RICARDO MOISES ANDURAY CAÑADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1940, 'SANDRA YAMALI COLINDRES MIDENCE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1941, 'JOSE ADELSO ZELAYA SANTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1942, 'MARGIE KARINA ALVARADO BONES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1943, 'BREISY GISELLE VALLADARES RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1945, 'STEVEN JOSUE PEREZ BAIDE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1946, 'CESAR ARNALDO MENDEZ DEL CID', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1948, 'YESSICA EMELINA ENAMORADO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1949, 'STEFANY NICOLE TEJEDA YANEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1951, 'SINDY NOHELY ACOSTA PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1952, 'MIGUEL EDUARDO MERCADO BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1953, 'FLORENCIO  POSADAS YANES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1954, 'INGRID BEATRIZ GOMEZ UMAÑA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1955, 'JENNIFER MELISSA LOPEZ CHAVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1956, 'TESLA MERARY MORALES ZUNIGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1957, 'WILSON ARMANDO ENAMORADO ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1959, 'SANTOS EFRAIN CASTILLO REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1960, 'EDWIN LEONARDO FONSECA VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1961, 'BIELKA JAZZEL VILLANUEVA SARMIENTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1962, 'KAROL DANNIELLA ALONZO TROCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1963, 'JESICA JISSEL GIRON MIRANDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1965, 'NANCY JOHANNA FAJARDO PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1966, 'RITZA NINETT SEVILLA BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1968, 'ARMANDO JOSE BARAHONA MURILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1970, 'GABRIELA MARIA SOLIS .', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1973, 'KEYLA SARAHY PONCE BARRIENTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1974, 'JAIRO ROSSELL CORTES  FERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1975, 'RUBEN FRANCISCO CASTRO MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1976, 'JENNIFER SUSANA HERNANDEZ ZELAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1978, 'MAUREEN LIZETH GARCIA AVONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1979, 'EVELYN ESTEFANY SORIANO CLAROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1984, 'ROGER GEOVANNY ORTEGA CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1986, 'CHRISTOFER UBENSES SUAZO FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1990, 'SUELLEN MARISOL LOPEZ CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1992, 'EDELYN ROSARIO ARTICA SANDRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1995, 'ELDER OMAR GUEVARA AQUINO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1996, 'JULIO CESAR CASTILLO BENITEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1997, 'CHRISTIAN JOSUE FUENTES LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (1999, 'JIMMY NATANAEL OYUELA MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2000, 'LAURA ROSSELA SALGADO ROSALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2001, 'NIDIA ELIZABETH VILLALOBOS ALFARO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2002, 'CARMEN  YANINA RODRIGUEZ ALVARADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2003, 'SKARLETH MELISSA DURON ZAVALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2004, 'BRYAN LEVI VEGA SUAZO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2005, 'ELMER  JOSUE GODOY VARGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2006, 'ANA ROSA ALVARENGA RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2007, 'ANA JOSE PERDOMO ABARCA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2008, 'ERICK OMAR VASQUEZ ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2009, 'CRISTHIAN JOSUE MACOTO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2011, 'SANDRA MARLENI CORTEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2012, 'ARACELY ELIZABETH ANDINO CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2014, 'KENDY JEFET SMART URQUIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2016, 'MARCO TULIO GARAY TEJEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2017, 'KEVIN JOSE NIETO MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2018, 'VICTOR MANUEL MENDOZA RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2019, 'JAMES MICHAEL OLSEN MANUELES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2020, 'ANDERSON JAFET AVILA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2021, 'JOSE DAVID CANACA VILLATORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2022, 'EMMANUEL  IRAHETA LAINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2024, 'Eder Orlando Barahona Lanza', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2026, 'MARCO ANTONIO MONCADA FIGUEROA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2028, 'LETICIA LISETH LOPEZ GUILLEN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2030, 'SINTHIA GISSELLE CASTILLO RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2031, 'HEIDY YARYTZA VALLECILLO ENAMORADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2033, 'KEVEN ALFONSO DONAIRE GALLARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2035, 'STEFANY SARAHI POSADAS HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2040, 'MARLON RAMON CARCAMO RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2041, 'JUAN MIGUEL MEJIA CHEVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2043, 'JAIRO ANTONIO BANEGAS PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2044, 'HECTOR ORLANDO THOMPSON NOLASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2045, 'ERIK  JONATHAN SANCHEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2048, 'MILTON ALEXIS MONTES ORELLANA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2049, 'MARIA VICENSA DURON .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2050, 'Marcela Yisselle Amador Montero', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2051, 'Alba Lizzeth Cruz Barrientos', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2052, 'WILSON ALEXANDER MATUTE OCHOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2053, 'JENSSY ABIGAIL HERNANDEZ RODAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2055, 'CARLA GABRIELA BUSTILLO MONTUFAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2056, 'KATHERINE FABIOLA LOBO AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2057, 'TESLA GABRIELA SIERRA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2058, 'ANDREA MICHELLE AMAYA SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2059, 'ROSA  LINDA ALVARADO VALLE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2060, 'GELIN YOLANDA RIVAS ESPINOZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2063, 'Linda Mayli Villatoro Torres', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2065, 'LIANA KATHERINE RAMOS ARITA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2066, 'ERICK FERNANDO MONTOYA TORRES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2068, 'EDNA ORFILIA GUERRA DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2069, 'OMAR FERNANDO MAJANO POSADAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2070, 'MARIA SUYAPA ARTICA CORDOBA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2071, 'INDIRA NADESKA ERAZO OTERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2072, 'ANGEL JEOVANNY PACHECO ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2073, 'BEATRIZ ALICIA ANDINO LAGOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2074, 'BHIANCA KARMELINA GALINDO SOTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2076, 'DIGNA EMERITA LAGOS VAZQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2078, 'ERICK DAVID CARIAS VARGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2079, 'FIORELLA GRISSEEL SOSA SIERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2080, 'GABRIELA NICOLL VASQUEZ CASTELLANOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2081, 'MABIS DARIELA LOBO GRIJALVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2082, 'Marcela Yamileth Murillo Godoy', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2083, 'NOLVIA MARIA FERRERA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2084, 'ROSARIO BANESSA ORDOÑEZ CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2085, 'SCARLETT BETSABE RODRIGUEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2087, 'VIRGINIA MARGARITA LOPEZ MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2088, 'WENDOLY KARINA MATAMOROS ANDRADE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2089, 'XAVIER ANDREE ORTEZ MAIRENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2090, 'JEYSEL JUDITH CHAVARRIA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2092, 'ESTEFANNY GISSELL ARDON ESCOBAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2093, 'HADIT MINERVA ZEPEDA SHAW', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2094, 'LOURDES EDITH MARADIAGA NOLASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2095, 'ISABELLA NICOLLE GUZMAN SANTIAGO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2096, 'BERTHA ELENA JIMENEZ SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2097, 'ISAAC SHAMIR URQUIA ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2098, 'DARWIN JOSUE CARIAS TOVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2099, 'CHERIL ESTHEFANY CERRATO TOVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2100, 'ABDIEL JOSUE ALTAMIRANO MONCADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2102, 'OWEN ALLAN FERRERA ABBOTT', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2104, 'RUTH SARAHI GARCIA RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2106, 'MIRIAN  JANETH ESTRADA RODRIGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2108, 'JESUS ROBERTO DUBON GUZMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2109, 'NORMA REGINA AGUILAR SALINAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2110, 'ANDREAINA GISSEL REYES AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2111, 'ASTRID BEATRIZ MOTIÑO BARDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2112, 'GARY ANTONIO CANO COOPER', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2115, 'OLVIN JAVIER RODRIGUEZ LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2116, 'HILDA STEPHANNY SANTOS CASTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2117, 'DINA CORA CERRATO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2120, 'ALEJANDRA DECIREHT ELVIR PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2123, 'ALLAN JOSUE TÁBORA MELGAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2124, 'ALMA LIZETH QUINTANILLA GARCÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2125, 'ANA CRISTINA TÁBORA COTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2126, 'ANA RUT RODRIGUEZ ALONZO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2128, 'ANGGIE MARLENE ZALDIVAR FAJARDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2129, 'ARIEL DAVID HERNANDEZ MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2131, 'ASTRID RUBI LEON MEJÍA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2132, 'BERNAR DANIEL CLAROS DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2133, 'BRENDA . GARCIA ALFARO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2134, 'CARLOS GERARDO ALVARADO AYALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2135, 'CARLOS MAURICIO CRUZ DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2137, 'CELIO FERNANDO HERNANDEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2139, 'CINTHIA YAMALY PINEDA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2141, 'CRISTIAN IVAN ESPAÑA ALAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2142, 'CYNTHIA JACKELINE TABORA CLAROS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2143, 'DALIA NAZARETH BENITEZ HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2144, 'DANIEL ENRIQUE VARGAS GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2146, 'DELMY JACKELY SALAZAR VILLELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2147, 'DENIS ARIEL GOMEZ ZALDIVAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2148, 'DIANA JULLISSA MATEO MELGAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2150, 'DIEGO ARMANDO FUENTES GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2151, 'EDGAR FABRICIO CRUZ LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2152, 'EDWIN EDGARDO PINEDA SUAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2153, 'EDY YORGENY DUBON GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2157, 'FAUSTO JOSUE MADRID .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2158, 'FRANCIS DANIELA PINEDA SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2159, 'FRANCISCO AMÍLCAR CASTRO LÓPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2161, 'GISSELA MARIA PINTO ARITA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2162, 'GLENDA LASTENIA MACHADO SARMIENTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2164, 'GREISY HERMINIA PINEDA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2165, 'GREISY LOURDES ORELLANA PERDOMO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2166, 'INGRID YAMILETH CHAVEZ MATEO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2167, 'INGRIS PAOLA PINEDA GÓMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2168, 'IRMA CAROLINA ZELAYA CHINCHILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2170, 'JESSICA LARISSA CALDERON LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2171, 'JOSSELINE CAROLINA CRUZ CERRATO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2172, 'JUAN DANIEL JALLU REYES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2175, 'KAREN WANESSA LÓPEZ RODEZNO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2176, 'KAREN YAMILETH REYES VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2177, 'KAREN YULISA FUENTES NAVARRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2178, 'KARLA MELISSA TABORA DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2179, 'KARLA YASMYN GUTIERREZ ORTEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2182, 'KENDY SAMARY MONDRAGON ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2183, 'KENIA ROSMERY ALCANTARA PORTILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2184, 'LILA MARGARITA PINEDA COTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2185, 'LILIANA ISABEL ROMERO GARAY', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2186, 'LOURDES ROSIBEL SANDOVAL AGUILAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2187, 'LUIS EDGARDO ROMERO JIMENEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2188, 'LUISA IVETH MARTINEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2189, 'MAIDA ELISA PERDOMO GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2190, 'MARCO TULIO ORELLANA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2191, 'MARIA ELENA ALVARADO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2192, 'MARIA JOSE BONILLA SANABRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2194, 'MARTA JANETH MACHORRO RAIMUNDO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2195, 'MARYLIN JAZMÍN SANTOS LARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2196, 'MICHAEL ANTONIO DUBON MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2197, 'MIRNA JEANETH CASTELLANOS MANCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2199, 'NIKSON JAVIER DERAS LEMUS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2200, 'NOLVI AMILCAR HERNANDEZ PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2202, 'OSCAR GEOVANY MARTINEZ VEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2203, 'PAMELA CECILIA CARRANZA AVILA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2204, 'RICCY MELISSA MADRID TEJADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2207, 'ROSA ELENA PERAZA PINTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2208, 'ROSA MARIA GARCIA GUILLEN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2210, 'SAMIRA . GUILLEN GUZMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2212, 'SELENIA JACKELINE DUBON GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2213, 'SENIA ISABEL RAMOS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2214, 'SHADIRA ITZEL FORTIN LOZANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2217, 'TERESA YAMILETH CRUZ AGUIRRE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2218, 'VERONICA ABIGAIL SAYBE GRANADOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2219, 'WENDOLLY PAMELA LUNA TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2221, 'GRECCIA MARIA PINEDA TEJEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2222, 'YORLENI MELISSA MEDINA AREVALO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2224, 'YOSSELIN VALERY PEREZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2225, 'YURI ALEJANDRA CASTELLANOS BLANCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2228, 'GERARDO JOSUE ORELLANA PÉREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2229, 'DUNIA LIZBETH ENAMORADO DÍAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2230, 'JOHANA DEL CARMEN MATA LEIVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2231, 'JESUS RANDOLFO PAGOAGA TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2232, 'MARIA ANTONIA CASTRO PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2233, 'FRANCIS ENRIQUE LOPEZ DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2242, 'ANA GEORGINA MORALES .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2244, 'YESSICA PAOLA CASCO LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2245, 'ANA SOFIA CARDONA VARGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2247, 'SHERLY DAYANA SUAZO ZAVALA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2248, 'ALEJANDRA POLETT CABRERA .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2249, 'MARITZA ANAI RIVERA MARADIAGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2250, 'ANA GABRIELA QUEZADA BUESO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2251, 'EDER JOHZEEL BENITEZ PINEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2253, 'BRAYAN EDUARDO ESCALON TABORA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2255, 'MIGUEL ADONIS REYES CARIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2257, 'DAVID ENRRIQUE SERRANO GUEVARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2258, 'DILCIA IDALMI OLIVA NAVARRO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2259, 'CARLOS JOSE ROMERO ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2261, 'ALBA ELIZETH  ALVAREZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2263, 'MARCO ANTONIO FONSECA VASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2264, 'DAVID . AMAYA ULLOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2265, 'LUIS ALBERTO AVILA MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2266, 'WILIAN ENRIQUE LEMUS DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2267, 'XOCHIL ANTONIA MERCADO GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2269, 'GERSON NOEL VASQUEZ MARTINEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2270, 'MARIA SUYAPA PINTO GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2272, 'DARIO ALEJANDRO MUNGUIA ZELAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2273, 'JOSE ALFREDO MERCADO MONTALVAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2274, 'CARLOS ALBERTO GARCIA TEJADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2275, 'DENNIS OMAR MARADIAGA CORDOVA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2276, 'JAIRO MAURICIO SALGADO ROJAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2277, 'JASON GADIEL VILLANUEVA MIRADA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2278, 'JESUS GEOVANNY RUIZ LANDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2279, 'JOSE FELIPE GUARDADO RAMIREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2280, 'KAROL YAMILETH PINTO GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2282, 'NELSON DAVID RODRIGUEZ MORALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2283, 'QUITH MARINUR ALEMAN ALEMAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2284, 'SELVIN JAVIER SAUCEDA LUJAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2286, 'ANA YULISSA GARCIA CARDENAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2287, 'ANGELA DAMARIS ORDOÑEZ MEDINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2289, 'DORIS YARIELA FLORES PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2290, 'FRANKLIN ALEXANDER MEDINA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2291, 'IDANIA PAOLA HENRIQUEZ MURILLO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2292, 'JOHANS ALEXANDER AGUILAR EUCEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2295, 'NORMA ELENA MURILLO PUERTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2296, 'SINTIA ESTER OBANDO VILLALOBOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2297, 'ANA JEMIMA ALVARADO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2298, 'CLAUDIA ARACELY MATA PEREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2301, 'GRAHAM RENIERI PACHECO ALVAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2304, 'JENNY ABIGAIL PEREZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2305, 'KEILY DANIELA MARTINEZ RUIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2306, 'MARIAN LARISSA PRIETO PAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2307, 'ASHLYN AMERICA CHAVEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2308, 'CRISTHIAN MAURICIO GUTIERREZ CHICAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2309, 'CINDY CAROLINA LOPEZ ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2310, 'CLAUDIA MARIA BARRIENTOS MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2311, 'GERMAN LUIS MIER BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2313, 'JAIME RENE ROSALES SANTOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2314, 'LESBIA MARTINA PACHECO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2316, 'NICOLLE ALEJANDRA CALIX MIER', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2317, 'ONEYDA MARIA GARAY DINARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2318, 'CARLOS ALEXANDER LUQUE LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2320, 'EDWIN GEOVANNY PINEDA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2321, 'GREICI NEREYDA GARCIA CANAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2323, 'HEIDY EDITH ORELLANA AMAYA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2324, 'JORGE ALBERTO ANDRADE ARGUETA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2325, 'JOSE ARMANDO MENJIVAR CRUZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2326, 'KARLIA YOSELI ALCERRO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2327, 'LESDY MARIELA MARTINEZ YANES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2328, 'LESLY YANIRA VELASQUEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2329, 'MARVA PAOLA GUITY DUARTE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2330, 'SAUL ALEXIS BAUTISTA DURAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2331, 'MARIELA ISABEL KAWAS DIAZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2332, 'ANASUA ABIGAIL ENAMORADO BARDALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2333, 'DIANA CAROLINA OSEGUERA ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2334, 'EDGARD DANIEL ZUNIGA FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2335, 'JOSE ALBERTO CORDON OCHOA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2336, 'JOSE DAVID CHAVEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2337, 'JOSE GEOVANY MENDEZ ROSALES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2338, 'JOSE RENIERY VELEZ SANABRIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2339, 'MARGIE NICOLLE GARCIA RIVERA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2340, 'TANIA YANETH LUJAN GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2341, 'YESICA MARISOL ROJAS .', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2342, 'YOSSELYN GUADALUPE REYES ACOSTA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2344, 'CRISTINA SUYAPA CASTELLANOS GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2345, 'DEBORAH CAROLINA MELENDEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2346, 'LESBI WALDINA ALBA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2347, 'MARIA ARGENTINA VILLANUEVA SALAZAR', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2351, 'WENSY KAROLINA MALDONADO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2352, 'CLAUDIA YOLANDA GARCIA LUQUE', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2353, 'FERNANDO JAVIER RAMIREZ MENA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2354, 'FIAMA PAOLA MENDEZ FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2355, 'JOSE LUIS AMAYA HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2356, 'KIMBERLYN OSIRIS MEJIA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2358, 'NILDA YARELY RODRIGUEZ MEJIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2360, 'TESLA GISSELL FERNANDEZ MATEO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2361, 'AIDE AGUSTINA VILLAFRANCA MUÑOZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2362, 'AZAF CADMIEL CRUZ CUNNINGHAM', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2363, 'CELSO . CRUZ BECERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2364, 'JUAN CARLOS GARCIA GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2365, 'JULIANA ARGENTINA SOSA BANEGAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2366, 'KAREN GISSELL MOLINA RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2367, 'KAREN PATRICIA SALGADO CHAVEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2368, 'KELVIN SEBASTIAN PACHECO ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2369, 'KEYLA EDITH ANTUNEZ GARCIA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2370, 'MARIA JOSE REINA LOPEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2371, 'MARLEN YORLENY AMAYA BONILLA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2372, 'ANANDA YAMILETH URBINA SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2373, 'GLENDA MARISOL BONILLA MALDONADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2374, 'MAITE GABRIELA LEON GUEVARA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2375, 'MOISES ALFREDO GOMEZ TORO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2377, 'SALMA GABRIELA MORALES VALERIANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2380, 'WENDY NEMI ORTIZ PASCUAL', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2381, 'YARIELA NADINA QUIROZ DE LEON ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2382, 'CARLOS DAVID FAJARDO IRIAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2383, 'MANUEL DE JESUS MANZANARES  FUNEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2385, 'CRUZ GEOVANNY RODRIGUEZ VALLADARES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2390, 'DARWIN DAVID BENAVIDES URBINA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2393, 'HEISER OMAR MOTIÑO VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2394, 'LEONARDO ANDRE SERRANO ORTIZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2395, 'KARLA PATRICIA SANCHEZ VILLAFRANCA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2396, 'JOSE ROBERTO AGUIRRE RUBI', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2397, 'DAYSI MILENA ORELLANA SOTO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2399, 'SANTOS GUADALUPE MATUTE  ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2401, 'KEVIN EDUARDO TORRES FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2402, 'CLODOALDO . TABORA TAVEIRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2403, 'FRANCIS ALEXIS VARELA SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2404, 'JORGE ALBERTO FONSECA YANEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2405, 'DANELIA MARIBEL MURCIA RAMOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2407, 'SAMY YOUSEFIN CASTRO GUERRA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2409, 'SIOMARA YAQUELYN RAMOS SERRANO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2412, 'DORIS SOBEIDA BENITEZ CHACON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2414, 'OSMAN ENRIQUE MALDONADO SANCHEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2415, 'NOE MARTIN PAVON ZEPEDA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2416, 'ELVIN DANIEL MOTIÑO PAVON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2417, 'ROLANDO ANTONIO RECARTE ROMERO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2423, 'LUIS RICARDO MATAMOROS LANZA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2424, 'SANDRA ARMIDA ROSA BARAHONA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2425, 'EDWIN EDGARDO AVELAR DUBON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2426, 'MARIA ASUNCION PALMA ALVARADO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2427, 'EVER ARNULFO RAMOS VARELA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2428, 'ALICIA GUADALUPE PAVON VELASQUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2429, 'CLAUDIA  RAQUEL  COLINDRES CARRASCO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2430, 'JOEL RIGOBERTO CHIRINOS RIVAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2432, 'JOSE CARLOS NIETO FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2434, 'GABRIEL FERNANDO LEIVA GUILLAN', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2437, 'ALEJANDRA NICOLLE RODRIGUEZ GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2438, 'GARY . CASTILLO ORTEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2439, 'Yorling  Adislao  Rodriguez Ponce', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2440, 'Gerardo  Noe  Caceres Mendez', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2441, 'EDWIN  RUBI MONTOYA GOMEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2442, 'WILFREDO . TORRES DOMINGUEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2443, 'GLORIA JAQUELINE MEDINA BENITEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2444, 'JENCY JOHANA CANTARERO HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2445, 'MARLO MARITO MEZA ALMANDAREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2446, 'JENNIFER SUYAPA CARCAMO LARIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2447, 'DANIA VANESSA ESCOTO RIOS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2448, 'CARLOS ALFREDO JAVIER HERNANDEZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2449, 'SOFIA LIZETH SERRANO MADRID', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2451, 'MARCOS  LOPEZ NORIEGA', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2452, 'ERNELIO  RIVERA WITCHO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2453, 'NELDY CAROLINA GREEN GUTIERREZ', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2455, 'ANDREA CAROLINA  ORTEGA LANZAS', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2456, 'ALFREDO EMANUEL PERDOMO  FLORES', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2457, 'ANDREA ALEJANDRA CRUZ DURON', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2458, 'ALEJANDRA ADAIA ORELLANA OSORIO', 1, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2459, 'BRENDA LIZETH MARADIAGA ARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2460, 'CARLOS  ARMANDO ACOSTA AGUILERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2462, 'DAVID  EDUARDO SANTOS COVER', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2463, 'DONNY RAIN RAMOS MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2464, 'EMERSON ALBERTO ALEMAN BANEGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2465, 'EDGARD STEVEN MEDINA MORADEL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2466, 'FLOR DE MARIA MARTINEZ  MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2467, 'GEISEL CLEMENTINA CALDERON TREJO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2468, 'HECTOR  ORLANDO DIAZ ANDRADE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2469, 'ISIS EMIGDIA MEJIA PAVON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2470, 'JOSE ANTONIO NUÑEZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2471, 'JONATHAN RAMIRO AMAYA AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2472, 'JOSE HUMBERTO ALVARADO MORALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2474, 'KEILLYN  ELENA HERNANDEZ VENTURA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2475, 'LIGIA SUGEY RAMOS DEL CID', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2477, 'LUIS  ANTONIO JUAREZ ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2478, 'MELANNY  MICHELLE ESCOTO CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2479, 'MARGORY  GISSELL MARTINEZ  SANTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2480, 'NORMA REGINA CALIX HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2481, 'NORMA  RAFAELA BANEGAS  CONTRERAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2482, 'OLDIN ARAEL QUINTANILLA LEIVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2483, 'SAUL ARMANDO CARRASCO MONDRAGON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2484, 'YEISLING ALICIA ESPINAL CHAVEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2485, 'LUIS  ALFREDO ALVAREZ MUÑOZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2486, 'ALICIA PAMELA ESPINOZA COELLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2487, 'ALICIA ALEJANDRA ALEMAN OLIVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2488, 'ARLIS CLARISA COLINDRES FUNEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2489, 'ADA WENDY ZEPEDA CASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2490, 'ANA LUCIA IZAGUIRRE CASTRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2491, 'AGUEDA ALEJANDRA ALVAREZ CARRANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2492, 'ANYI CLARISSA  ESPINAL MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2493, 'ANGIE  ROCIO ESPINAL  MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2494, 'BESSY SCARLETH MONCADA RUBIO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2495, 'BREYSI MELORITH BARAHONA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2496, 'CARMEN LIZETH AGUILERA CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2497, 'CLAUDIA MARILIA FLORES VEGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2498, 'DARWIN JOEL FLORES FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2499, 'DANIELA SARAHI SANCHEZ FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2500, 'DENYS OMAR MARTINEZ ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2501, 'DEISY PAMELA ORTEGA PALMA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2502, 'EDUARDO JOSUE SALGADO SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2503, 'ERICK MAURICIO AVILA ELVIR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2504, 'FRANCISCO JAVIER CANO MONTOYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2506, 'GERSY ALDAHIR ALVAREZ ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2508, 'HARON JOSUE ARTOLA MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2509, 'HECTOR DAVID CASTILLO ZAMBRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2510, 'IRIS YESSENIA REYES FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2511, 'INGRISD YAQUELINNE RODRIGUEZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2513, 'JOSE CORNELIO FUENTES MONTALVAN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2514, 'JELIN ESTEFANIA MALDONADO CASTRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2516, 'KENIA YULIETH ZUNIGA GONZALEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2517, 'KARLA YOLIBETH CRUZ JOVEL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2518, 'KEVIN NOEL SORIANO DAVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2520, 'LEDYS PATRICIA COLINDRES BAQUEDANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2521, 'LESTER DAVID GONZALES GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2522, 'LITZY MARIELA AGUILAR SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2524, 'LUZ ALEYDA BACA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2525, 'MARIANA SARAI ORDOÑEZ RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2526, 'MARCELA GISSELI MATAMOROS ARGEÑAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2528, 'MAGDA JULISSA ZELAYA MEDINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2529, 'MARIA  FERNANDA SOLANO PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2530, 'MARLYN TERESA RODRIGUEZ HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2531, 'MARVIN ODILSON VARELA MONDRAGON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2532, 'MILTON RAFAEL REYES FORTIN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2533, 'MARIA FERNANDA CANALES CANALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2535, 'NANCY DINORA ESPINOZA BANEGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2536, 'OSCAR ARIEL LAINEZ MATAMOROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2537, 'OSCAR ELVIN LAGOS FUNEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2538, 'RONAL EDUARDO BRISUELA PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2540, 'SILVIA PATRICIA OSORTO SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2541, 'SUSAN MICHELL BARAHONA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2542, 'VIVAN ESKARLA PERALTA MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2544, 'CARLOS  EMILIO LAGOS SAUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2545, 'ROSA ARGENTINA PEREZ BACA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2546, 'ORLANDO HUMBERTO AGUILERA QUIROZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2548, 'RAYMUNDO  MOISES GARCIA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2549, 'NATAN RICARDO TROCHEZ GUTIERREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2551, 'LUIS FERNANDO RIVAS GARMENDIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2553, 'JUAN CARLOS MARADIAGA TERCERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2554, 'JAIRO EDILBERTO FLORES ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2555, 'HEYSEL NICOL SERVELLON MALDONADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2556, 'GLORIA STEPFANIE OSORTO  LOBO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2557, 'FELIPE JOSUE VASQUEZ OSORTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2558, 'DENIS RAFAEL PONCE ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2559, 'DANYS HOJARSY CABRERA AUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2560, 'CENIA MAHOLY ESPINAL PORTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2561, 'CARLOS ALBERTO GARCIA GONZALEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2562, 'DANILO  JONATHAN VARGAS MONCADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2563, 'ALEJANDRA ISABEL RODRIGUEZ RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2564, 'ANUAR  JAVIER FLORES LEZAMA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2565, 'MARCOS RENE GUERRA ALVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2566, 'CARLOS ADAN FLORES MARQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2568, 'KAREN GISSELLE GAMEZ SABILLON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2569, 'GREISY ARACELY BENITEZ TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2570, 'YAMELY WALESKA CACERES CASTAÑEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2571, 'DOMINIC OLOFF DOMINGUEZ DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2572, 'CRISTHIAN EVARISTO CASTELLANOS TROCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2573, 'GILDA PATRICIA GAITAN ELVIR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2574, 'NACER JOEL MALDONADO FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2575, 'HAZEL CAROLINA FLORES LEIVA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2576, 'JAVIER DARIO JIMENEZ GUILLEN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2577, 'EDGARDO  RAUL DIAZ MARQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2578, 'ZULMA KARINA BORJAS BENITES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2579, 'OLMAN ERNESTO SERRANO MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2580, 'JOSSELYN ILIANA RAMOS CUELLAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2581, 'MAHELY YAQUELINE TORREZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2582, 'KENIA LOURDES MEJIA RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2583, 'ADBEEL ENRIQUE AROCA AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2584, 'AARON ALEJANDRO GARCIA JUAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2586, 'Cristy  Graciela  Parada  Osorto ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2587, 'Jose  Rolando  Avila  Castellanos ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2588, 'LESNY SARAHI BACA BETANCOURTH', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2589, 'Lorwin  Adonis Rodriguez Ponce ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2590, 'Orlin Noel  Mejia  Torrez ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2591, 'Oscar  Javier Flores Mendez', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2592, 'Pamela  Alejandra  Rodriguez  Martinez ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2593, 'Suany  Juliett  Cardenas  Cruz ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2594, 'Susana Melissa  Carranza  Ordoñez', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2595, 'Wilson  Mauricio  Bones  Lopez ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2596, 'Angie Marisol Larios  Santamaría', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2597, 'Cindy Paola Enamorado Peña', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2598, 'Edgar Elias Cardoza Calidonio', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2599, 'Francisco José Ochoa Dominguez', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2600, 'Hugo Roel Mejía Perdomo', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2601, 'Iris  Anabel Melgar', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2602, 'Jaret  Raul Sanchez Maldonado', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2603, 'Josue David Arita .', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2604, 'Marcos  Antonio Gamero  Rojas', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2605, 'Melania Paola Calderon Del Cid', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2607, 'Miguel  Angel Monroy Well', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2608, 'JUAN CARLOS CANALES GODOY', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2609, 'KEVIN  FRANCISCO FLORES VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2610, 'GEOVANNY  SAMAEL VASQUEZ AGUILERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2611, 'GUSTAVO JOSUE CANALES OQUELI', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2612, 'Elmer  Josúe  López  Romero ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2613, 'Fernanda  Nicolle  Carranza  Ulloa ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2614, 'Heylin Josseline  Lagos  Cardona ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2616, 'Marvin Edgardo  Velasquez Mejía ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2617, 'Hery  Omar  Perez  Lemus ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2618, 'Julio  Cesar  Rivera  Reyes ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2619, 'Nimia  Yamileth Saenz Pineda ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2621, 'Teresa Jazmin Cantiyano Sanchez', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2622, 'Ashleyn  Jatzary  Tercero  Amaya ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2623, 'Dadier  Odair  Chavez  Castro ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2624, 'Obdulio Mauricio Ulloa  Carbajal  ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2625, 'Yunior Alexander Maldonado Mejía ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2626, 'Oscar Rodrigo López  Paz', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2628, 'Bessy  Jasary  Aguilera  Mendez', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2630, 'CECILIA MICHELLE CHAVEZ GUTIERREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2631, 'MARIELA LIZETH SALINAS  AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2632, 'MARKZELLA HUGETH RUIZ BANEGAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2633, 'BAYRON JOSUE ESTRADA  ARDON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2634, 'OLVIN ESAU MOREL VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2635, 'SOPHIA POULLETH MORENO SANTOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2636, 'JENIFER GABRIELA VELASQUEZ PALMA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2637, 'MILDRED NOHELY FONSECA VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2639, 'CESIA JULISSA FIGUEROA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2640, 'GRACIE STEPHANIE BARJUN EUCEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2641, 'ANGIE LIZZETTE TORRES MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2642, 'SEIDY NINOSKA ZAVALA MATAMOROS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2643, 'LESVI OBEIDA LOPEZ ARGUETA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2644, 'ALEXANDRA EUNICE MARTINEZ PINEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2645, 'CAROLINA GISSEL OSORIO BRICEÑO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2646, 'NELSON OMAR FLORES ORTEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2647, 'ELIEZER ESAU RODRIGUEZ CARDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2648, 'NERY EDGARDO ROMERO MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2649, 'ELENA GISEL CARDENAS LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2650, 'PEDRO LUIS CARDONA VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2651, 'DAVID EDGARDO RODEZNO ZEPEDA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2653, 'DARWIN RENE BUSTILLO MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2654, 'LUIS  FERNANDO HERNANDEZ REYES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2655, 'MITZI CAROLINA MEDINA ZELAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2656, 'DANIEL ALEJANDRO MALDONADO PARADA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2657, 'DANIEL ALEJANDRO MENCIA RUBIO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2658, 'JENIFER XIOMARA LOZANO VALDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2659, 'ERIKSON  VEGA JACOME', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2660, 'NERY YAMILETH LOPEZ BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2661, 'LICIDA DEL CARMEN ULLOA CABALLERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2662, 'ANDREA MARIA REYES DEGRANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2663, 'DIANA YADIRA DEGRANDEZ AGUILAR', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2664, 'ERIK  FERNANDO YANES CASTILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2665, 'STEFANY YAMILETH NAVAS ALVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2666, 'KASLA YELENA SUAZO SARAVIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2667, 'ALLYM  GRACIELA QUEVEDO ZAVALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2668, 'ROSA MARIA FLORES ESPINAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2669, 'DELMIS YADIRA GOMEZ CANTARERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2670, 'MARIA  JOSE MATUTE MORAZAN', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2671, 'MARIA  JOSE MIDENCE AVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2672, 'STEPHANY CAROLINA CASTRO AUGUSTINUS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2673, 'JOSE LUIS IZAGUIRRE BENITEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2674, 'HEYDI MELISSA VARELA RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2675, 'HEYMI  LIZZETTE GUTIERREZ BURGOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2676, 'JOHANNA MIREYA REYES VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2677, 'ADELA KARINA SABILLON MUÑOZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2678, 'ANDREA ELOISA AMAYA VELASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2679, 'ELVIN JOSE MARTINEZ ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2680, 'DIANA JULISSA SORIANO MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2681, 'IRMA PAOLA GOMEZ SANCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2682, 'IRENE BEXAI ROMERO MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2683, 'ROBERTH EDUARDO VALLECILLO RIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2684, 'JOSELYN DAYANA RODRIGUEZ BERRIOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2685, 'GERIZIM IDALIA RODRIGUEZ VALLADAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2686, 'ZABDI DAGOBERTO CASTELLANOS MEJIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2687, 'CARLO FERNANDO NUÑEZ CARBAJAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2688, 'GRECIA YAHELI CABALLERO TORRES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2689, 'CARLOS FERNANDO AMAYA ALVAREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2690, 'DANY GERARDO ARDON PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2691, 'ARMANDO FAVIAN ROMERO MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2692, 'WILMA FABIOLA LOBO NUÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2693, 'ALICE YERLINDA GUITY BAQUEDANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2694, 'RUBY LORENA FLORES BUCARDO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2695, 'SHERIDAN RUBENIA VASQUEZ MEDRANO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2696, 'JOSSIE GAMALIEL GONZALEZ VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2697, 'KARLA LIZETH RAMIREZ LORENZANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2698, 'JOSE ALFREDO  RAUDALES GUTIERREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2699, 'PHALON  MELISSA REYES DEGRANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2701, 'CELIO FERNANDO FERRERA LANZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2703, 'UVALDO CESARANY CRUZ VILLATORO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2704, 'SANDRA ROSIBEL AMADOR RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2705, 'ROGER BAYARDO MURILLO ALCÁNTARA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2707, 'GABRIELA ALEJANDRA LOPEZ DUBON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2709, 'KARLA  PATRICIA MARTINEZ BORJAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2710, 'CARLOS ROBERTO COELLO ZAVALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2720, 'ANYI SCARLETH CRUZ GONZALES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2721, 'JEOVANNY FRANCISCO MUÑOZ RODRIGUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2722, 'JORGE MIGUEL MURILLO ZAVALA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2723, 'CARLOS ROBERTO RODRIGUEZ ZELAYA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2724, 'NELSY ARASELY CACERES AVILA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2725, 'MAYURI GICELA MARTINEZ HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2726, 'CECILIA NOREY CRUZ MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2727, 'KEILY NOEMI LOPEZ GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2728, 'JORGE LUIS RODRIGUEZ  VALDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2729, 'MARVIN OMAR AGUILAR ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2730, 'ESCARLETH YADIRA NUÑEZ ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2731, 'SELVIN  PAGOAGA BRITO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2732, 'CARLOS ARTURO RAMOS .', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2733, 'TIFANY NALLELY GALVEZ CARIAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2734, 'LUIS HENRIQUE CRUZ LICONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2735, 'ANTONY MICHAEL CANALES CACERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2736, 'CLAUDIA STEFANY MATUTE  CARBAJAL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2737, 'DARIO FRANCISCO CRUZ MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2738, 'MIRNA YOHANA SORIANO PALMA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2739, 'NORMA YOSSELIN GONZALES MEDINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2740, 'TEDDY ALEJANDRO MEJIA ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2741, 'YUDIS MARIA GALLEGOS NAVARRO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2742, 'DANIA VICTORIA MEJIA MURILLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2743, 'DALIA MARISOL TORRES HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2745, 'MIXAR ELI AGURCIA CABALLERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2748, 'JOSE RAUL OCHOA MOLINA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2749, 'ZAMIR ADOLFO SOTO HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2750, 'FELIX ADRIAN COLINDRES HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2751, 'DEBIR CALEB AVILEZ PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2752, 'JOSMARY NOELY CRUZ VILLATORO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2753, 'REMBERTO  ASTUL BARAHONA BARAHONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2754, 'IRIS MARLENE RECONCO FLORES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2755, 'ASTRID JUDITH COELLO TROCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2756, 'HECTOR  JOSUE VALDEZ CABRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2757, 'LUIS  ENRIQUE MURILLO CACERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2758, 'GENESIS MICHELL MOLINA BORJAS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2760, 'JOSUE SAMAEL BANEGAS RAMIREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2761, 'DAVID ALBERTO FUENTES ANARIBA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2762, 'ANGELICA MARIA LICONA CARTAGENA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2763, 'CARMENZA MARIA MARTINEZ HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2764, 'EDGAR ANTONIO TORRES MARTINEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2765, 'DARLING EUNICE UMANZOR BAUTISTA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2767, 'NADIA DIAMANTINA MURILLO ALCANTARA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2768, 'JULIO  CESAR LOPEZ PEREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2769, 'DELMER JOSIEL MEDINA TORREZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2770, 'WILIAN RONEY MENDOZA HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2771, 'CLAUDIA CAROLINA BORJAS RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2772, 'KASSANDRA NICOLE BUSTILLO DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2773, 'YADIRA  LIZETH CABRERA  ORTIZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2774, 'JOSE  ARNOLDO CORRALES ROMERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2775, 'GENESIS YARAMIS ORELLANA PAVON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2776, 'YENNY SUYAPA QUIROZ HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2777, 'MARCO ANTONIO CASTELLANOS HERRERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2778, 'JOSSELYN PAOLA ANTUNEZ MORALEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2779, 'GERSON DANIEL MEMBREÑO PAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2780, 'JULIO SAMUEL COELLO .', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2781, 'GERLIN ALEJANDRO ZUNIGA LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2782, 'ANYI ELIANA CABALLERO VASQUEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2783, 'LUIS FERNANDO ESCOBAR SARMIENTO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2784, 'ERNESTO DAVID CARCAMO HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2785, 'CARMEN GABRIELA CARIAS CABALLERO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2788, 'DAINA VANESSA CONTRERAS LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2790, 'ELVIA BALESKA MURILLO LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2791, 'ALEXI DAVID RAMOS ALDANA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2792, 'FANNY YOLIBETH RAMOS CALIX', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2794, 'KEVIN CECILIO CASCO PERDOMO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2795, 'ANGGIE VANESSA GONZALES MACHADO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2796, 'MIRTZA ANDREINA ULLOA GARCIA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2797, 'MARCELO DE JESUS GALLARDO SABIO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2798, 'CARMEN SUYAPA RUDON ARITA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2800, 'ROSBI ENRIQUE ESTRADA HERNANDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2802, 'LOURDES ARCENIA ORTIZ TREJO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2803, 'BETHY JOHANA ZELAYA JIMENEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2804, 'LUIS  MANUEL PALMA  ORDOÑEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2805, 'JEIDI MARSELA PAYAN MENDEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2806, 'JUAN  JOSE  CACERES MATUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2809, 'IRENE BETZABE REYES RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2810, 'YEIMI  DANELIA SANCHEZ VILCHEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2811, 'EDNA DARIELA AGUIRRE RIVERA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2812, 'ANA  PAOLA FLORES CALDERON', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2813, 'ZAMARELEE WALDINA CARIAS PADILLA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2814, 'RAQUEL  LOPEZ MENDOZA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2815, 'SAMIA  CLARISSA RECONCO  CACERES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2816, 'MARIELA ISABEL  PERDOMO CASCO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2817, 'IRIS JACKELINE PAZ LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2818, 'LESLY  KAROLINA TORRES ORTEGA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2819, 'EDWIN  OMAR MORALES RAMOS', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2820, 'MELIDA ESTELA ESPINOZA MATUTE', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2821, 'CRISTY BANESSA CRUZ DIAZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2822, 'MANUEL DE JESUS LICONA GARRIOD', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2823, 'ROSA ANGELICA GONZALES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2824, 'JOSUE ORLANDO GONZALES CRUZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2825, 'EDIN GERARDO MARTINEZ LICONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2826, 'YANSSI YOCSARY ORTIZ LICONA', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2827, 'BRAYAN JOSUE MILLA LOPEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2828, 'BELQUIS YOJANI CHAVARRIA CALLES', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (2885, 'CELENIA DEL CARMEN CARRASCO GOMEZ', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (9898, 'MICHAEL OWEN BRAUN COWEL', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (9993, 'SANTOS ISRAEL CHIRINOS COELLO', 0, 0);
INSERT INTO `tbl_numeroempleado` VALUES (26613, 'VIVIAN ALEXANDRA ALVARADO MARTINEZ', 0, 0);

-- ----------------------------
-- Table structure for tbl_regionales
-- ----------------------------
DROP TABLE IF EXISTS `tbl_regionales`;
CREATE TABLE `tbl_regionales`  (
  `idRegional` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRegional` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`idRegional`, `nombreRegional`) USING BTREE,
  INDEX `idRegional`(`idRegional`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_regionales
-- ----------------------------
INSERT INTO `tbl_regionales` VALUES (1, 'Dirección Regional CECOP Tegucigalpa');
INSERT INTO `tbl_regionales` VALUES (2, 'Dirección Regional CECOP Choluteca');
INSERT INTO `tbl_regionales` VALUES (3, 'Dirección Regional CECOP Tela');
INSERT INTO `tbl_regionales` VALUES (4, 'Dirección Regional CECOP San Pedro Sula');
INSERT INTO `tbl_regionales` VALUES (5, 'Dirección Regional CECOP Santa Rosa de Copán ');

-- ----------------------------
-- Table structure for tbl_rol
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rol`;
CREATE TABLE `tbl_rol`  (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_rol
-- ----------------------------
INSERT INTO `tbl_rol` VALUES (1, 'Administrador');
INSERT INTO `tbl_rol` VALUES (2, 'Tecnico');
INSERT INTO `tbl_rol` VALUES (3, 'Desarrollador');
INSERT INTO `tbl_rol` VALUES (4, 'Usuario');

-- ----------------------------
-- Table structure for tbl_tecnicos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tecnicos`;
CREATE TABLE `tbl_tecnicos`  (
  `id` int(11) NOT NULL,
  `tecnico` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_tecnicos
-- ----------------------------
INSERT INTO `tbl_tecnicos` VALUES (1, 'Fabricio Zuniga');
INSERT INTO `tbl_tecnicos` VALUES (2, 'Jairon Andino');
INSERT INTO `tbl_tecnicos` VALUES (3, 'José Mario Jimenez');
INSERT INTO `tbl_tecnicos` VALUES (4, 'cesar');
INSERT INTO `tbl_tecnicos` VALUES (5, 'Arthur');
INSERT INTO `tbl_tecnicos` VALUES (6, 'Rony');

-- ----------------------------
-- Table structure for tbl_ticket
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ticket`;
CREATE TABLE `tbl_ticket`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NULL DEFAULT current_timestamp(),
  `serie` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado_ticket` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre_usuario` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_dept` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `asunto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `solucion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `atendidopor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `asignar_ticket` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `regional` int(11) NOT NULL,
  `fechaatendido` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_ticket
-- ----------------------------
INSERT INTO `tbl_ticket` VALUES (16, '2023-09-11 14:48:30', 'TK96N1', 'Rechazado', 'Admin Regional TGU', 'admintgu@gmail.com', 'IT', 'Otro', 'RECHAZADO ', 'PRUEBA REGIONAL TGU', 'No asignado', 'tectgu', 1, 'Sin Atender');
INSERT INTO `tbl_ticket` VALUES (17, '2023-09-11 14:42:29', 'TK22N2', 'Pendiente', 'Admin Regional CHOLUTECA', 'admincho@gmail.com', 'IT', 'Otro', 'Pendiente', 'PRUEBA REGIONAL CHOLUTECA', 'No asignado', 'Sin Atender', 2, 'Sin Atender');
INSERT INTO `tbl_ticket` VALUES (18, '2023-09-11 14:43:12', 'TK41N3', 'Pendiente', 'Admin Regional TELA', 'admintela@gmail.com', 'IT', 'Otro', 'Pendiente', 'PRUEBA REGIONAL TELA', 'No asignado', 'Sin Atender', 3, 'Sin Atender');
INSERT INTO `tbl_ticket` VALUES (19, '2023-09-11 14:44:13', 'TK04N4', 'Pendiente', 'Admin Regional SPS', 'adminsps@gmail.com', 'IT', 'Otro', 'Pendiente', 'PRUEBA REGIONAL SPS', 'No asignado', 'Sin Atender', 4, 'Sin Atender');
INSERT INTO `tbl_ticket` VALUES (20, '2023-09-11 14:44:56', 'TK72N5', 'Pendiente', 'Admin Regional SRC', 'adminsrc@gmail.com', 'IT', 'Otro', 'Pendiente', 'PRUEBA REGIONAL SRC', 'No asignado', 'Sin Atender', 5, 'Sin Atender');
INSERT INTO `tbl_ticket` VALUES (21, '2023-09-11 14:50:16', 'TK24N6', 'Pendiente', 'EDWIN ARON MARTINEZ CABRERA', 'e.martinez@911.gob.hn', 'Gerencia de Tecnología', 'Conexión de Red', 'Pendiente', 'PRUEBA CON USUARIO TGU', 'No asignado', 'Sin Atender', 1, 'Sin Atender');

-- ----------------------------
-- Table structure for tbl_ticket_desarrollo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ticket_desarrollo`;
CREATE TABLE `tbl_ticket_desarrollo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NULL DEFAULT NULL,
  `serie` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `estado_ticket` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `nombre_usuario` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `regional` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `sistema` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `reporte` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_ticket_desarrollo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_turnos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_turnos`;
CREATE TABLE `tbl_turnos`  (
  `id_turno` int(11) NOT NULL,
  `turnos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_turno`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_turnos
-- ----------------------------
INSERT INTO `tbl_turnos` VALUES (1, 'A');
INSERT INTO `tbl_turnos` VALUES (2, 'B');

-- ----------------------------
-- Table structure for tbl_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE `tbl_usuarios`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre_usuario` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_rol` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `clave` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email_usuario` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `departamento` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `numeroEmpleado` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL DEFAULT '',
  `regional` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_usuarios
-- ----------------------------
INSERT INTO `tbl_usuarios` VALUES (37, 'usuario', 'usuario', '4', 'e10adc3949ba59abbe56e057f20f883e', 'usuario@gmail.com', '23145', 'Gerencia de Tecnología', '1033', 1, 1);
INSERT INTO `tbl_usuarios` VALUES (43, 'EDWIN ARON MARTINEZ CABRERA', 'emartinez', '4', 'e10adc3949ba59abbe56e057f20f883e', 'e.martinez@911.gob.hn', '96454635', 'Gerencia de Tecnología', '2759', 1, 1);

SET FOREIGN_KEY_CHECKS = 1;
