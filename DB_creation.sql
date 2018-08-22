--
-- Estructura de tabla para la tabla `enterprise`
--

CREATE TABLE `enterprise` (
  `enterprise_id` bigint(20) UNSIGNED NOT NULL,
  `enterprise_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `enterprise_type` enum('OTHER','INTEGRATOR','DISTRIBUTOR') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_password_hash` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `date_added` date NOT NULL,
  `phone` int(11) NOT NULL,
  `enterprise_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Estructura de tabla para la tabla `license`
--

CREATE TABLE `license` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_user_id` int(11) NOT NULL,
  `admin_user_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `request_type` enum('NEW','UPGRADE','RENOVATION','CONFIGURATION_CHANGE') COLLATE utf8_spanish_ci NOT NULL,
  `license_type` enum('PERMANENT','DEMO','TEMPORAL') COLLATE utf8_spanish_ci NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `license_details` varchar(4000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`enterprise_id`),
  ADD UNIQUE KEY `enterprise_id` (`enterprise_id`);

--
-- Indices de la tabla `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `enterprise_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `license`
--
ALTER TABLE `license`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;