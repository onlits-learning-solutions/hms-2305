CREATE TABLE IF NOT EXISTS allocation
(
    allocation_id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    room_no CHAR(4),
    hosteller_id INT,
    employee_id INT,
    FOREIGN KEY (room_no) REFERENCES room (room_no),
    FOREIGN KEY (hosteller_id) REFERENCES hosteller (hosteller_id),
    FOREIGN KEY (employee_id) REFERENCES employee (employee_id)
);