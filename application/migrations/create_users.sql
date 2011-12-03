
create table users (
	id int not null auto_increment, 
	primary key(id),
	username VARCHAR(255), 
	password VARCHAR(255), 
	created_at datetime,
	updated_at datetime
);

