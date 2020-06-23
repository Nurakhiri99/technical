REST API:
http://127.0.0.1/technical/kontak
- method GET
- method POST
- method PUT
- method DELETE

Frontend:
http://127.0.0.1/technical/admin

sample data json :
{   
    "name":"nur111X",
    "email":"nur111@gmail.com",
    "password":"116546",
    "gender":"perempuan",
    "married":"belum nikah",
    "address":"cirebon"
}

Database : kontak

CREATE TABLE `customer` (
  `customer_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `married` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;