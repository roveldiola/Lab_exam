CREATE TABLE Student (
	student_number	int(10),
    first_name	varchar(30),
    last_name	varchar(30),
    middle_initial	varchar(30),
    birthday	date,
    section_id int(10),
    PRIMARY KEY (student_number),
    FOREIGN KEY (section_id) REFERENCES section(section_id)
)