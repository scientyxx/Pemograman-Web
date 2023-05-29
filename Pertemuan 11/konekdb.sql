CREATE TABLE IF NOT EXISTS 'user'(
'id' INT(11) not null AUTO_INCREMENT,
 'nama' varchar(50) NOT null,
    'alamat' text not null,
    'pekerjaan' varchar(50) not null,
    PRIMARY KEY ('id')
    ) ENGINE-INNODB DEFAULT charset-latin1 AUTO_INCREMENT-64;
    
    
    INSERT INTO'user' ('id', 'nama', 'alamat', 'pekerjaan') VALUES
    (1, 'Andi', 'Surabaya', 'web programer'),
    (2, 'Santoso', 'Jakarta', 'Web Desaigner'),
    (6, 'Samsul', 'Sumedang', 'Pegawai');    
    