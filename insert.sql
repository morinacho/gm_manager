INSERT INTO `user_type` (`user_type_id`, `user_type_desc`) VALUES ('1', 'Administrador'), ('2', 'Recurso');

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_address`, `user_password`, `user_email`, `user_phone`, `user_image`, `user_status`, `user_create_at`, `user_type_id`) VALUES ('1', 'admin', 'admin', 'calle falsa', '$2y$12$EF2S6DLvpgtrKnoFdRXTC.uY6tRdwGUOyNVaKXLy/OnMDu3Jo1Yfu', 'admin@mail.com', '22222222', NULL, '1', '2021-07-31 18:00:51.000000', '1');

INSERT INTO `option` (`option_id`, `option_desc`, `option_icon`, `option_url`) VALUES ('1', 'Cliente', 'people_outline', 'customers'), ('2', 'Orden de trabajo', 'list_alt', 'workorders');

INSERT INTO `action` (`action_id`, `action_desc`, `action_status`, `action_icon`, `option_id`) VALUES ('1', 'Registrar Cliente', '0', 'add', '1'), ('2', 'Crear orden de trabajo', '0', 'add', '2');

INSERT INTO `option_has_user` (`option_id`, `user_id`, `option_has_user_status`) VALUES ('1', '1', '1'), ('2', '1', '1');

INSERT INTO `action_has_user` (`action_id`, `user_id`, `action_has_user_status`) VALUES ('2', '1', '1'), ('1', '1', '1');
