creat database crud_db;

use crud_db;

creat table 'users'(
    'id' int(11) not null auto_increment,
    'name' varchar(100);
    'email' VARCHAR(100);
    'mobile' VARCHAR (15);
    primary key ('id');
);