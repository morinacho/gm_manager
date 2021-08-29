INSERT INTO `user_type` (`user_type_id`, `user_type_desc`) VALUES ('1', 'Administrador'), ('2', 'Recurso');

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_address`, `user_password`, `user_email`, `user_phone`, `user_status`, `user_create_at`, `user_type_id`) VALUES ('1', 'admin', 'admin', 'calle falsa', '$2y$12$EF2S6DLvpgtrKnoFdRXTC.uY6tRdwGUOyNVaKXLy/OnMDu3Jo1Yfu', 'admin@mail.com', '22222222', '1', '2021-07-31 18:00:51.000000', '1');
INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_address`, `user_password`, `user_email`, `user_phone`, `user_document`, `user_status`, `user_create_at`, `user_type_id`) VALUES ('2', 'Recurso', 'Contador', 'Calle falsa 1234', '$2y$12$EF2S6DLvpgtrKnoFdRXTC.uY6tRdwGUOyNVaKXLy/OnMDu3Jo1Yfu', 'recurso@mail.com', '11223344', '112233', '1', '2021-08-25 05:29:35.000000', '2');
INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_address`, `user_password`, `user_email`, `user_phone`, `user_document`, `user_status`, `user_create_at`, `user_type_id`) VALUES ('3', 'Contador', 'Contable', 'calle falsa 1252', '$2y$12$EF2S6DLvpgtrKnoFdRXTC.uY6tRdwGUOyNVaKXLy/OnMDu3Jo1Yfu', 'recurso2@mail.com', '443355766', '66433221', '1', '2021-08-25 05:31:20.000000', '2');
INSERT INTO `client_type` (`client_type_id`, `client_type_desc`) VALUES ('1', 'Persona Fisica - Monotributista'), ('2', 'Persona Fisica - Responsable Inscripto'), ('3', 'Persona Juridica - Responsable Inscripto');