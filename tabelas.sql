create DATABASE crud_alunos;

use crud_alunos;

create table alunos (
    id int not null primary key auto_increment,
    nome varchar(255) not null,
    idade int not null,
    escola varchar(255) not null,
    email varchar(255) not null
);
