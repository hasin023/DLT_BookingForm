CREATE TABLE SCHEDULES (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(255) NOT NULL,
    START_DATETIME DATETIME NOT NULL,
    END_DATETIME DATETIME NOT NULL
);

INSERT INTO SCHEDULES (
    TITLE,
    START_DATETIME,
    END_DATETIME
) VALUES (
    'Meeting 1',
    '2023-09-15 10:00:00',
    '2023-09-15 12:00:00'
),
(
    'Meeting 2',
    '2023-09-16 14:00:00',
    '2023-09-16 16:00:00'
),
(
    'Appointment',
    '2023-09-17 09:30:00',
    '2023-09-17 10:30:00'
),
(
    'Conference',
    '2023-09-20 13:00:00',
    '2023-09-20 17:00:00'
);