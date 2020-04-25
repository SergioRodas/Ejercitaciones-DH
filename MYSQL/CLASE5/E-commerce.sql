CREATE TABLE usuarios (
id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
usu_nombre varchar(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
pass VARCHAR(100) NOT NULL
);
CREATE TABLE compras (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
fecha DATETIME NOT NULL,
usuario_id INT UNSIGNED NOT NULL,
producto_id INT UNSIGNED NOT NULL,
KEY `compras_usuario_id_foreign` (`usuario_id`),
KEY `compras_producto_id_foreign` (`producto_id`),
CONSTRAINT `compras_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
CONSTRAINT `compras_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`)
);
  CREATE TABLE productos (
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  precio DECIMAL (10,2) UNSIGNED NOT NULL, 
  nombre VARCHAR(100) NOT NULL,
  marca_id INT UNSIGNED NOT NULL,
  categoria_id INT UNSIGNED NOT NULL,
  KEY `compras_marca_id_foreign` (`marca_id`),
  KEY `compras_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `compras_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  CONSTRAINT `compras_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
);
CREATE TABLE marcas (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
nombre VARCHAR(50) NOT NULL
);
CREATE TABLE categorias (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
nombre VARCHAR(50) NOT NULL,
categoria_padre_id INT UNSIGNED NOT NULL,
KEY `compras_categoria_padre_id_foreign` (`categoria_padre_id`),
CONSTRAINT `compras_categoria_padre_id_foreign` FOREIGN KEY (`categoria_padre_id`) REFERENCES `categorias_padre` (`id`)
);
CREATE TABLE categorias_padre (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
nombre VARCHAR(50) NOT NULL
);

  