<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("INSERT INTO municipios
      (id, estado_id, descripcion, created_by, updated_by, created_at, updated_at)
      VALUES
      (1, 1, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (2, 15, 'Baruta', 1, 1, current_timestamp, current_timestamp),
      (3, 15, 'Chacao', 1, 1, current_timestamp, current_timestamp),
      (4, 15, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (5, 15, 'El Hatillo', 1, 1, current_timestamp, current_timestamp),
      (6, 15, 'Acevedo', 1, 1, current_timestamp, current_timestamp),
      (7, 15, 'Andres Bello', 1, 1, current_timestamp, current_timestamp),
      (8, 15, 'Brion', 1, 1, current_timestamp, current_timestamp),
      (9, 15, 'Buroz', 1, 1, current_timestamp, current_timestamp),
      (10, 15, 'Carrizal', 1, 1, current_timestamp, current_timestamp),
      (11, 15, 'Cristobal Rojas', 1, 1, current_timestamp, current_timestamp),
      (12, 15, 'Guacaipuro', 1, 1, current_timestamp, current_timestamp),
      (13, 15, 'Independencia', 1, 1, current_timestamp, current_timestamp),
      (14, 15, 'Lander', 1, 1, current_timestamp, current_timestamp),
      (15, 15, 'Los Salias', 1, 1, current_timestamp, current_timestamp),
      (16, 15, 'Paez', 1, 1, current_timestamp, current_timestamp),
      (17, 15, 'Paz Castillo', 1, 1, current_timestamp, current_timestamp),
      (18, 15, 'Pedro Gual', 1, 1, current_timestamp, current_timestamp),
      (19, 15, 'Plaza', 1, 1, current_timestamp, current_timestamp),
      (20, 15, 'Simon Bolivar', 1, 1, current_timestamp, current_timestamp),
      (21, 15, 'Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (22, 15, 'Zamora', 1, 1, current_timestamp, current_timestamp),
      (23, 23, 'Vargas', 1, 1, current_timestamp, current_timestamp),
      (24, 12, 'Camaguan', 1, 1, current_timestamp, current_timestamp),
      (25, 12, 'Chaguaramas', 1, 1, current_timestamp, current_timestamp),
      (26, 12, 'El Socorro', 1, 1, current_timestamp, current_timestamp),
      (27, 12, 'Francisco de Miranda', 1, 1, current_timestamp, current_timestamp),
      (28, 12, 'Jose Felix Ribas', 1, 1, current_timestamp, current_timestamp),
      (29, 12, 'Jose Tadeo Monagas', 1, 1, current_timestamp, current_timestamp),
      (30, 12, 'Juan German Roscio', 1, 1, current_timestamp, current_timestamp),
      (31, 12, 'Julian Mellado', 1, 1, current_timestamp, current_timestamp),
      (32, 12, 'Las Mercedes del Llano', 1, 1, current_timestamp, current_timestamp),
      (33, 12, 'Leonardo Infante', 1, 1, current_timestamp, current_timestamp),
      (34, 12, 'Ortiz', 1, 1, current_timestamp, current_timestamp),
      (35, 12, 'Pedro Zaraza', 1, 1, current_timestamp, current_timestamp),
      (36, 12, 'San Geronimo de Guayabal', 1, 1, current_timestamp, current_timestamp),
      (37, 12, 'San Jose de Guaribe', 1, 1, current_timestamp, current_timestamp),
      (38, 12, 'Santa Maria de Ipire', 1, 1, current_timestamp, current_timestamp),
      (39, 5, 'Bolivar', 1, 1, current_timestamp, current_timestamp),
      (41, 5, 'Camatagua', 1, 1, current_timestamp, current_timestamp),
      (42, 5, 'Francisco Linares', 1, 1, current_timestamp, current_timestamp),
      (43, 5, 'Giradot', 1, 1, current_timestamp, current_timestamp),
      (44, 5, 'Jose Angel Lamas', 1, 1, current_timestamp, current_timestamp),
      (45, 5, 'Jose Felix Ribas', 1, 1, current_timestamp, current_timestamp),
      (46, 5, 'Jose Revenga', 1, 1, current_timestamp, current_timestamp),
      (47, 5, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (48, 5, 'Mario Iragorry', 1, 1, current_timestamp, current_timestamp),
      (49, 5, 'Ocumare de la costa', 1, 1, current_timestamp, current_timestamp),
      (50, 5, 'San Casimiro', 1, 1, current_timestamp, current_timestamp),
      (51, 5, 'San Sebastian', 1, 1, current_timestamp, current_timestamp),
      (52, 5, 'Santiago Mariño', 1, 1, current_timestamp, current_timestamp),
      (53, 5, 'Santos Michelena', 1, 1, current_timestamp, current_timestamp),
      (54, 5, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (55, 5, 'Tovar', 1, 1, current_timestamp, current_timestamp),
      (56, 5, 'Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (57, 5, 'Zamora', 1, 1, current_timestamp, current_timestamp),
      (58, 8, 'Bejuma', 1, 1, current_timestamp, current_timestamp),
      (59, 8, 'Carlos Arevalo', 1, 1, current_timestamp, current_timestamp),
      (60, 8, 'Diego Ibarra', 1, 1, current_timestamp, current_timestamp),
      (61, 8, 'Guacara', 1, 1, current_timestamp, current_timestamp),
      (62, 8, 'Juan Jose Mora', 1, 1, current_timestamp, current_timestamp),
      (63, 8, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (64, 8, 'Los Guayos', 1, 1, current_timestamp, current_timestamp),
      (65, 8, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (66, 8, 'Montalban', 1, 1, current_timestamp, current_timestamp),
      (67, 8, 'Naguanagua', 1, 1, current_timestamp, current_timestamp),
      (68, 8, 'Puerto Cabello', 1, 1, current_timestamp, current_timestamp),
      (69, 8, 'San Diego', 1, 1, current_timestamp, current_timestamp),
      (70, 8, 'San Joaquin', 1, 1, current_timestamp, current_timestamp),
      (71, 8, 'Valencia', 1, 1, current_timestamp, current_timestamp),
      (72, 2, 'Anaco', 1, 1, current_timestamp, current_timestamp),
      (73, 2, 'Aragua', 1, 1, current_timestamp, current_timestamp),
      (74, 2, 'Bolivar', 1, 1, current_timestamp, current_timestamp),
      (75, 2, 'Bruzual', 1, 1, current_timestamp, current_timestamp),
      (76, 2, 'Cajigal', 1, 1, current_timestamp, current_timestamp),
      (77, 2, 'Carvajal', 1, 1, current_timestamp, current_timestamp),
      (78, 2, 'Diego Bautista Urbaneja', 1, 1, current_timestamp, current_timestamp),
      (79, 2, 'Freites', 1, 1, current_timestamp, current_timestamp),
      (80, 2, 'Guanipa', 1, 1, current_timestamp, current_timestamp),
      (81, 2, 'Guanta', 1, 1, current_timestamp, current_timestamp),
      (82, 2, 'Independencia', 1, 1, current_timestamp, current_timestamp),
      (83, 2, 'Libertad', 1, 1, current_timestamp, current_timestamp),
      (84, 2, 'Mcgregor', 1, 1, current_timestamp, current_timestamp),
      (85, 2, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (86, 2, 'Monagas', 1, 1, current_timestamp, current_timestamp),
      (87, 2, 'Peñalver', 1, 1, current_timestamp, current_timestamp),
      (88, 2, 'Piritu', 1, 1, current_timestamp, current_timestamp),
      (89, 2, 'San Juan de Capistrano', 1, 1, current_timestamp, current_timestamp),
      (90, 2, 'Santa Ana', 1, 1, current_timestamp, current_timestamp),
      (91, 2, 'Simón Rodriguez', 1, 1, current_timestamp, current_timestamp),
      (92, 2, 'Sotillo', 1, 1, current_timestamp, current_timestamp),
      (93, 3, 'Alto Orinoco', 1, 1, current_timestamp, current_timestamp),
      (94, 3, 'Atabapo', 1, 1, current_timestamp, current_timestamp),
      (95, 3, 'Atures', 1, 1, current_timestamp, current_timestamp),
      (96, 3, 'Autana', 1, 1, current_timestamp, current_timestamp),
      (97, 3, 'Manapiare', 1, 1, current_timestamp, current_timestamp),
      (98, 3, 'Maroa', 1, 1, current_timestamp, current_timestamp),
      (99, 3, 'Rio Negro', 1, 1, current_timestamp, current_timestamp),
      (100, 4, 'Achaguas', 1, 1, current_timestamp, current_timestamp),
      (101, 4, 'Biruaca', 1, 1, current_timestamp, current_timestamp),
      (102, 4, 'Muños', 1, 1, current_timestamp, current_timestamp),
      (103, 4, 'Paez', 1, 1, current_timestamp, current_timestamp),
      (104, 4, 'Pedro Camejo', 1, 1, current_timestamp, current_timestamp),
      (105, 4, 'Romulo Gallegos', 1, 1, current_timestamp, current_timestamp),
      (106, 4, 'San Fernando', 1, 1, current_timestamp, current_timestamp),
      (107, 6, 'Alberto Arvelo Torrealba', 1, 1, current_timestamp, current_timestamp),
      (108, 6, 'Andrés Eloy Blanco', 1, 1, current_timestamp, current_timestamp),
      (109, 6, 'Antonio José de Sucre', 1, 1, current_timestamp, current_timestamp),
      (110, 6, 'Arismendi', 1, 1, current_timestamp, current_timestamp),
      (111, 6, 'Barinas', 1, 1, current_timestamp, current_timestamp),
      (112, 6, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (113, 6, 'Cruz Paredes', 1, 1, current_timestamp, current_timestamp),
      (114, 6, 'Ezequiel Zamora', 1, 1, current_timestamp, current_timestamp),
      (115, 6, 'Obispos', 1, 1, current_timestamp, current_timestamp),
      (116, 6, 'Pedraza', 1, 1, current_timestamp, current_timestamp),
      (117, 6, 'Rojas', 1, 1, current_timestamp, current_timestamp),
      (118, 6, 'Sosa', 1, 1, current_timestamp, current_timestamp),
      (119, 7, 'Caroní', 1, 1, current_timestamp, current_timestamp),
      (120, 7, 'Cedeño', 1, 1, current_timestamp, current_timestamp),
      (121, 7, 'El Callao', 1, 1, current_timestamp, current_timestamp),
      (122, 7, 'Gran Sabana', 1, 1, current_timestamp, current_timestamp),
      (123, 7, 'Heres', 1, 1, current_timestamp, current_timestamp),
      (124, 7, 'Piar', 1, 1, current_timestamp, current_timestamp),
      (125, 7, 'Raul Leoni', 1, 1, current_timestamp, current_timestamp),
      (126, 7, 'Roscio', 1, 1, current_timestamp, current_timestamp),
      (127, 7, 'Sifontes', 1, 1, current_timestamp, current_timestamp),
      (128, 7, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (129, 7, 'Padre Pedro Chen', 1, 1, current_timestamp, current_timestamp),
      (130, 9, 'Anzoategui', 1, 1, current_timestamp, current_timestamp),
      (131, 9, 'Falcon', 1, 1, current_timestamp, current_timestamp),
      (132, 9, 'Giraldot', 1, 1, current_timestamp, current_timestamp),
      (133, 9, 'Lima Blanco', 1, 1, current_timestamp, current_timestamp),
      (134, 9, 'Pao de San Juan Bautista', 1, 1, current_timestamp, current_timestamp),
      (135, 9, 'Ricaurte', 1, 1, current_timestamp, current_timestamp),
      (136, 9, 'Rómulo Gallegos', 1, 1, current_timestamp, current_timestamp),
      (137, 9, 'San Carlos', 1, 1, current_timestamp, current_timestamp),
      (138, 9, 'Tinaco', 1, 1, current_timestamp, current_timestamp),
      (139, 10, 'Antonio Díaz', 1, 1, current_timestamp, current_timestamp),
      (140, 10, 'Casacoima', 1, 1, current_timestamp, current_timestamp),
      (141, 10, 'Pedernales', 1, 1, current_timestamp, current_timestamp),
      (142, 10, 'Tucupita', 1, 1, current_timestamp, current_timestamp),
      (143, 11, 'Acosta', 1, 1, current_timestamp, current_timestamp),
      (144, 11, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (145, 11, 'Buchivacoa', 1, 1, current_timestamp, current_timestamp),
      (146, 11, 'Cacique Manaure', 1, 1, current_timestamp, current_timestamp),
      (147, 11, 'Carirubana', 1, 1, current_timestamp, current_timestamp),
      (148, 11, 'Colina', 1, 1, current_timestamp, current_timestamp),
      (149, 11, 'Dabajuro', 1, 1, current_timestamp, current_timestamp),
      (150, 11, 'Democracia', 1, 1, current_timestamp, current_timestamp),
      (151, 11, 'Falcón', 1, 1, current_timestamp, current_timestamp),
      (152, 11, 'Federacion', 1, 1, current_timestamp, current_timestamp),
      (153, 11, 'Jacura', 1, 1, current_timestamp, current_timestamp),
      (154, 11, 'Los Taques', 1, 1, current_timestamp, current_timestamp),
      (155, 11, 'Mauroa', 1, 1, current_timestamp, current_timestamp),
      (156, 11, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (157, 11, 'Monseñor Iturriza', 1, 1, current_timestamp, current_timestamp),
      (158, 11, 'Palmasola', 1, 1, current_timestamp, current_timestamp),
      (159, 11, 'Petit', 1, 1, current_timestamp, current_timestamp),
      (160, 11, 'Piritu', 1, 1, current_timestamp, current_timestamp),
      (161, 11, 'San Francisco', 1, 1, current_timestamp, current_timestamp),
      (162, 11, 'Silva', 1, 1, current_timestamp, current_timestamp),
      (163, 11, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (164, 11, 'Tocopero', 1, 1, current_timestamp, current_timestamp),
      (165, 11, 'Union', 1, 1, current_timestamp, current_timestamp),
      (166, 11, 'Urumaco', 1, 1, current_timestamp, current_timestamp),
      (167, 11, 'Zamora', 1, 1, current_timestamp, current_timestamp),
      (168, 13, 'Andrés Eloy Blanco', 1, 1, current_timestamp, current_timestamp),
      (169, 13, 'Crespo', 1, 1, current_timestamp, current_timestamp),
      (170, 13, 'Iribarren', 1, 1, current_timestamp, current_timestamp),
      (171, 13, 'Jiménez', 1, 1, current_timestamp, current_timestamp),
      (172, 13, 'Morán', 1, 1, current_timestamp, current_timestamp),
      (173, 13, 'Palavecino', 1, 1, current_timestamp, current_timestamp),
      (174, 13, 'Simón Planas', 1, 1, current_timestamp, current_timestamp),
      (175, 13, 'Torres', 1, 1, current_timestamp, current_timestamp),
      (176, 13, 'Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (177, 14, 'Alberto Adriani', 1, 1, current_timestamp, current_timestamp),
      (178, 14, 'Andrés Bello ', 1, 1, current_timestamp, current_timestamp),
      (179, 14, 'Antonio Pinto Salinas ', 1, 1, current_timestamp, current_timestamp),
      (180, 14, 'Acarigua', 1, 1, current_timestamp, current_timestamp),
      (181, 14, 'Arzobispo Chacón', 1, 1, current_timestamp, current_timestamp),
      (182, 14, 'Campo Elías', 1, 1, current_timestamp, current_timestamp),
      (183, 14, 'Caracciolo Parra Olmedo ', 1, 1, current_timestamp, current_timestamp),
      (184, 14, 'Cardenal Quintero', 1, 1, current_timestamp, current_timestamp),
      (185, 14, 'Guaraque', 1, 1, current_timestamp, current_timestamp),
      (186, 14, 'Julio César Salas ', 1, 1, current_timestamp, current_timestamp),
      (187, 14, 'Justo Briceño', 1, 1, current_timestamp, current_timestamp),
      (188, 14, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (189, 14, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (190, 14, 'Obispo Ramos de Lora ', 1, 1, current_timestamp, current_timestamp),
      (191, 14, 'Padre Norega', 1, 1, current_timestamp, current_timestamp),
      (192, 14, 'Pueblo Llano', 1, 1, current_timestamp, current_timestamp),
      (193, 14, 'Rangel', 1, 1, current_timestamp, current_timestamp),
      (194, 14, 'Rivas Dávila', 1, 1, current_timestamp, current_timestamp),
      (195, 14, 'Santos Marquina', 1, 1, current_timestamp, current_timestamp),
      (196, 14, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (197, 14, 'Tovar', 1, 1, current_timestamp, current_timestamp),
      (198, 14, 'Tulio Febres Cordero', 1, 1, current_timestamp, current_timestamp),
      (199, 14, 'Zea', 1, 1, current_timestamp, current_timestamp),
      (200, 16, 'Acosta', 1, 2, current_timestamp, current_timestamp),
      (201, 16, 'Aguasay', 1, 1, current_timestamp, current_timestamp),
      (202, 16, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (203, 16, 'Caripe', 1, 1, current_timestamp, current_timestamp),
      (204, 16, 'Cedeño', 1, 1, current_timestamp, current_timestamp),
      (205, 16, 'Ezequiel Zamora', 1, 1, current_timestamp, current_timestamp),
      (206, 16, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (207, 16, 'Maturín', 1, 1, current_timestamp, current_timestamp),
      (208, 16, 'Piar', 1, 1, current_timestamp, current_timestamp),
      (209, 16, 'Punceres', 1, 1, current_timestamp, current_timestamp),
      (210, 16, 'Santa Bárbara', 1, 1, current_timestamp, current_timestamp),
      (211, 16, 'Sotillo', 1, 1, current_timestamp, current_timestamp),
      (212, 16, 'Uracoa', 1, 1, current_timestamp, current_timestamp),
      (213, 17, 'Antolín del Campo', 1, 1, current_timestamp, current_timestamp),
      (214, 17, 'Arismendi', 1, 1, current_timestamp, current_timestamp),
      (215, 17, 'Díaz', 1, 1, current_timestamp, current_timestamp),
      (216, 17, 'García', 1, 1, current_timestamp, current_timestamp),
      (217, 17, 'Gómez', 1, 1, current_timestamp, current_timestamp),
      (218, 17, 'Maneiro', 1, 1, current_timestamp, current_timestamp),
      (219, 17, 'Marcano', 1, 1, current_timestamp, current_timestamp),
      (220, 17, 'Mariño', 1, 1, current_timestamp, current_timestamp),
      (221, 17, 'Península de Macanao', 1, 1, current_timestamp, current_timestamp),
      (222, 17, 'Tubores', 1, 1, current_timestamp, current_timestamp),
      (223, 17, 'Villalba', 1, 1, current_timestamp, current_timestamp),
      (224, 18, 'Agua Blanca', 1, 1, current_timestamp, current_timestamp),
      (225, 18, 'Araure', 1, 1, current_timestamp, current_timestamp),
      (226, 18, 'Esteller', 1, 1, current_timestamp, current_timestamp),
      (227, 18, 'Guanare', 1, 1, current_timestamp, current_timestamp),
      (228, 18, 'Guanarito', 1, 1, current_timestamp, current_timestamp),
      (229, 18, 'Monseñor José Vicenti de Unda', 1, 1, current_timestamp, current_timestamp),
      (230, 18, 'Ospino', 1, 1, current_timestamp, current_timestamp),
      (231, 18, 'Páez', 1, 1, current_timestamp, current_timestamp),
      (232, 18, 'Papelón', 1, 1, current_timestamp, current_timestamp),
      (233, 18, 'San Genaro de Boconoíto', 1, 1, current_timestamp, current_timestamp),
      (234, 18, 'San Rafael de Onoto', 1, 1, current_timestamp, current_timestamp),
      (235, 18, 'Santa Rosalía', 1, 1, current_timestamp, current_timestamp),
      (236, 18, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (237, 18, 'Turén', 1, 1, current_timestamp, current_timestamp),
      (238, 19, 'Andrés Eloy Blanco19', 1, 1, current_timestamp, current_timestamp),
      (239, 19, 'Andrés Mata', 1, 1, current_timestamp, current_timestamp),
      (240, 19, 'Arismendi', 1, 1, current_timestamp, current_timestamp),
      (241, 19, 'Benítez', 1, 1, current_timestamp, current_timestamp),
      (242, 19, 'Beremúdez', 1, 1, current_timestamp, current_timestamp),
      (243, 19, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (244, 19, 'Cagigal', 1, 1, current_timestamp, current_timestamp),
      (245, 19, 'Cruz Salmerón Acosta', 1, 1, current_timestamp, current_timestamp),
      (246, 19, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (247, 19, 'Mariño', 1, 1, current_timestamp, current_timestamp),
      (248, 19, 'Mejía', 1, 1, current_timestamp, current_timestamp),
      (249, 19, 'Montes', 1, 1, current_timestamp, current_timestamp),
      (250, 19, 'Ribero', 1, 1, current_timestamp, current_timestamp),
      (251, 19, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (252, 19, 'Valdez', 1, 1, current_timestamp, current_timestamp),
      (253, 20, 'Andrés Bello', 1, 1, current_timestamp, current_timestamp),
      (254, 20, 'Antonio Rómulo Costa', 1, 1, current_timestamp, current_timestamp),
      (255, 20, 'Ayacucho', 1, 1, current_timestamp, current_timestamp),
      (256, 20, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (257, 20, 'Cárdenas', 1, 1, current_timestamp, current_timestamp),
      (258, 20, 'Córdova', 1, 1, current_timestamp, current_timestamp),
      (259, 20, 'Fernández Feo', 1, 1, current_timestamp, current_timestamp),
      (260, 20, 'Francisco de Miranda', 1, 1, current_timestamp, current_timestamp),
      (261, 20, 'García de Hevia', 1, 1, current_timestamp, current_timestamp),
      (262, 20, 'Guásimos', 1, 1, current_timestamp, current_timestamp),
      (263, 20, 'Independencia', 1, 1, current_timestamp, current_timestamp),
      (264, 20, 'Jáuregui', 1, 1, current_timestamp, current_timestamp),
      (265, 20, 'José María Vargas', 1, 1, current_timestamp, current_timestamp),
      (266, 20, 'Junín', 1, 1, current_timestamp, current_timestamp),
      (267, 20, 'Libertad', 1, 1, current_timestamp, current_timestamp),
      (268, 20, 'Libertador', 1, 1, current_timestamp, current_timestamp),
      (269, 20, 'Lobatera', 1, 1, current_timestamp, current_timestamp),
      (270, 20, 'Michelena', 1, 1, current_timestamp, current_timestamp),
      (271, 20, 'Panamericano', 1, 1, current_timestamp, current_timestamp),
      (272, 20, 'Pedro María Ureña', 1, 1, current_timestamp, current_timestamp),
      (273, 20, 'Rafael Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (274, 20, 'Samuel Darío Maldonado', 1, 1, current_timestamp, current_timestamp),
      (275, 20, 'San Cristóbal', 1, 1, current_timestamp, current_timestamp),
      (276, 20, 'Seboruco', 1, 1, current_timestamp, current_timestamp),
      (277, 20, 'Simón Rodríguez', 1, 1, current_timestamp, current_timestamp),
      (278, 20, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (279, 20, 'Torbes', 1, 1, current_timestamp, current_timestamp),
      (280, 20, 'Uribante', 1, 1, current_timestamp, current_timestamp),
      (281, 20, 'San Judas Tadeo', 1, 1, current_timestamp, current_timestamp),
      (282, 21, 'Andrés Bello', 1, 1, current_timestamp, current_timestamp),
      (283, 21, 'Boconó', 1, 1, current_timestamp, current_timestamp),
      (284, 21, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (285, 21, 'Candelaria', 1, 1, current_timestamp, current_timestamp),
      (286, 21, 'Carache', 1, 1, current_timestamp, current_timestamp),
      (287, 21, 'Escuque', 1, 1, current_timestamp, current_timestamp),
      (288, 21, 'José Felipe Márquez Cañizalez', 1, 1, current_timestamp, current_timestamp),
      (289, 21, 'Juan Vicente Campos Elías', 1, 1, current_timestamp, current_timestamp),
      (290, 21, 'La Ceiba', 1, 1, current_timestamp, current_timestamp),
      (291, 21, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (292, 21, 'Monte Carmelo', 1, 1, current_timestamp, current_timestamp),
      (293, 21, 'Motatán', 1, 1, current_timestamp, current_timestamp),
      (294, 21, 'Pampán', 1, 1, current_timestamp, current_timestamp),
      (295, 21, 'Pampanito', 1, 1, current_timestamp, current_timestamp),
      (296, 21, 'Rafael Rangel', 1, 1, current_timestamp, current_timestamp),
      (297, 21, 'San Rafael de Carvajal', 1, 1, current_timestamp, current_timestamp),
      (298, 21, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (299, 21, 'Trujillo', 1, 1, current_timestamp, current_timestamp),
      (300, 21, 'Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (301, 21, 'Valera', 1, 1, current_timestamp, current_timestamp),
      (302, 22, 'Veroes', 1, 1, current_timestamp, current_timestamp),
      (303, 22, 'Arístides Bastidas', 1, 1, current_timestamp, current_timestamp),
      (304, 22, 'Bolívar', 1, 1, current_timestamp, current_timestamp),
      (305, 22, 'Bruzal', 1, 1, current_timestamp, current_timestamp),
      (306, 22, 'Cocorote', 1, 1, current_timestamp, current_timestamp),
      (307, 22, 'Independencia', 1, 1, current_timestamp, current_timestamp),
      (308, 22, 'José Antonio Páez', 1, 1, current_timestamp, current_timestamp),
      (309, 22, 'La Trinidad', 1, 1, current_timestamp, current_timestamp),
      (310, 22, 'Manuel Monge', 1, 1, current_timestamp, current_timestamp),
      (311, 22, 'Nirgua', 1, 1, current_timestamp, current_timestamp),
      (312, 22, 'Peña', 1, 1, current_timestamp, current_timestamp),
      (313, 22, 'San Felipe', 1, 1, current_timestamp, current_timestamp),
      (314, 22, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (315, 22, 'Urachiche', 1, 1, current_timestamp, current_timestamp),
      (316, 24, 'Almirante Padilla', 1, 1, current_timestamp, current_timestamp),
      (317, 24, 'Baralt', 1, 1, current_timestamp, current_timestamp),
      (318, 24, 'Cabimas', 1, 1, current_timestamp, current_timestamp),
      (319, 24, 'Catatumbo', 1, 1, current_timestamp, current_timestamp),
      (320, 24, 'Colón', 1, 1, current_timestamp, current_timestamp),
      (321, 24, 'Francisco Javier Pulgar', 1, 1, current_timestamp, current_timestamp),
      (322, 24, 'Jesús Enrique Losada', 1, 1, current_timestamp, current_timestamp),
      (323, 24, 'La Cañada de Urdaneta', 1, 1, current_timestamp, current_timestamp),
      (324, 24, 'Lagunillas', 1, 1, current_timestamp, current_timestamp),
      (325, 24, 'Machiques de Perijá', 1, 1, current_timestamp, current_timestamp),
      (326, 24, 'Mara', 1, 1, current_timestamp, current_timestamp),
      (327, 24, 'Maracaibo', 1, 1, current_timestamp, current_timestamp),
      (328, 24, 'Miranda', 1, 1, current_timestamp, current_timestamp),
      (329, 24, 'Páez', 1, 1, current_timestamp, current_timestamp),
      (330, 24, 'Rosario de Perijá', 1, 1, current_timestamp, current_timestamp),
      (331, 24, 'San Francisco', 1, 1, current_timestamp, current_timestamp),
      (332, 24, 'Santa Rita', 1, 1, current_timestamp, current_timestamp),
      (333, 24, 'Simón Bolívar', 1, 1, current_timestamp, current_timestamp),
      (334, 24, 'Sucre', 1, 1, current_timestamp, current_timestamp),
      (335, 24, 'Valmore Rodríguez', 1, 1, current_timestamp, current_timestamp),
      (336, 24, 'Jesús María Semprún', 1, 1, current_timestamp, current_timestamp);");
  }

}
