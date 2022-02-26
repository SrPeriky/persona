SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `persona` (
  `persona_id` int(11) NOT NULL,
  `persona_tip_id` int(11) NOT NULL,
  `persona_identificacion` text NOT NULL,
  `persona_nombre` text NOT NULL,
  `persona_apellido` text NOT NULL,
  `persona_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `tipo_documento` (
  `tip_id` int(11) NOT NULL,
  `tip_nombre` text NOT NULL,
  `tip_sigla` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tipo_documento` (`tip_id`, `tip_nombre`, `tip_sigla`) VALUES
(1, 'tarjeta de Identidad', 'TI'),
(2, 'Cédula de Ciudadanía', 'CC'),
(3, 'Pasaporte', 'PS');


CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` text NOT NULL,
  `usuario_email` text NOT NULL,
  `usuario_pasw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_pasw`) VALUES
(1, 'administrador', 'admin@fesc.edu.co', '21232f297a57a5a743894a0e4a801fc3');


ALTER TABLE `persona`
  ADD PRIMARY KEY (`persona_id`);

ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tip_id`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);


ALTER TABLE `persona`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tipo_documento`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
