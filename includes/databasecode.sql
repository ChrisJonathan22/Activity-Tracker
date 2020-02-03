CREATE TABLE activity (
    activity_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    activity_date varchar(255) NOT NULL,
    activity_name varchar(255) NOT NULL,
    activity_hours varchar(255) NOT NULL,
    activity_minutes varchar(255) NOT NULL,
);

INSERT INTO activity (activity_date, activity_name, activity_hours, activity_minutes)
    VALUES ('03/02/2020', 'Fitness', '2', '30');