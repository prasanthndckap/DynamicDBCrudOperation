
CREATE DATABASE check_project;
use check_project;

CREATE TABLE projects(
id int NOT null  AUTO_INCREMENT,
    project_name varchar(255) NOT null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);

CREATE TABLE tasks(
id int NOT null  AUTO_INCREMENT,
    task_name varchar(255),
    task_description varchar(255),
    project_id int,
  created_at timestamp,
    updated_at timestamp,
    deleted_at  timestamp null,
    PRIMARY KEY (id),
    FOREIGN KEY (project_id) REFERENCES projects(id) on delete cascade
);
select * from tasks where deleted_at and project_id = 16;
alter table  tasks add COLUMN image varchar(255);

alter projects ADD COLUMN projectImages varchar(255);

use check_project;
create table images(
id int AUTO_INCREMENT,
images varchar(255),
modelName varchar(255),
modelNo int
PRIMARY key(id),
-- FOREIGN key (modelNo) REFERENCES tasks(id),
-- FOREIGN key (modelNo) REFERENCES projects(id)
)

-- count query for count deleted database
-- SELECT COUNT(id) FROM tasks WHERE deleted_at;