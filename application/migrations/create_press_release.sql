
create table press_release (
	id int not null auto_increment, 
	primary key(id),
	logo VARCHAR(255), 
	link VARCHAR(255), 
	alt VARCHAR(255), 
	created_at datetime,
	updated_at datetime
);

