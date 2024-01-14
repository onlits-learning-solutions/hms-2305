
    CREATE TABLE bills
(
    bill_no INT AUTO_INCREMENT PRIMARY KEY,
    bill_date DATE,
    allocation_id INT,
    particulars VARCHAR(255),
    rate DECIMAL(10, 2),
    gst DECIMAL(10, 2),
    amount DECIMAL(10, 2)
);


