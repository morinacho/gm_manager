/* OPTIONS */
INSERT INTO `option` (`option_id`, `option_desc`, `option_icon`) VALUES ('1', 'Inicio', 'home'), ('2', 'Orden de trabajo', 'outbox'), ('3', 'Avisos', 'email'), ('4', 'Clientes', 'person'), ('5', 'Recurso', 'manage_accounts'), ('6', 'Backup', 'cloud'), ('7', 'Soporte', 'support_agent'), ('8', 'Seguridad', 'security'), ('9', 'Configuración', 'settings');

/* ACTIONS */
INSERT INTO `action` (`action_id`, `action_desc`, `action_url`, `option_id`) VALUES ('1', 'Dashboard', 'main', '1'), ('2', 'Caja', 'main/cashregister', '1'), ('3', 'Ver Ordenes de trabajo', 'workorder', '2'), ('4', 'Agregar orden de trabajo', 'workorder/create', '2'), ('5', 'Ver avisos activos', 'notices', '3'), ('6', 'Agregar avisos', 'notices/create', '3'), ('7', 'Ver clientes', 'customers', '4'), ('8', 'Registrar cliente', 'customers/create', '4'), ('9', 'Ver recurso', 'users', '5'), ('10', 'Agregar recurso', 'users/create_resource', '5');

/* ADMIN CONTROL */
INSERT INTO `option_has_user` (`option_id`, `user_id`, `option_has_user_status`) VALUES ('1', '1', '1'), ('2', '1', '1'), ('3', '1', '1'), ('4', '1', '1'), ('5', '1', '1'), ('6', '1', '1'), ('7', '1', '1'), ('8', '1', '1'), ('9', '1', '0');

INSERT INTO `action_has_user` (`action_id`, `user_id`, `action_has_user_status`) VALUES ('1', '1', '1'), ('2', '1', '1'), ('3', '1', '1'), ('4', '1', '1'), ('5', '1', '1'), ('6', '1', '1'), ('7', '1', '1'), ('8', '1', '1'), ('9', '1', '1'), ('10', '1', '1');
