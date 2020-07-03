CREATE TABLE users(
    userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(50) NOT NULL,
    password char(50),
    emai char(50) NOT NULL,
    phone char(10) NOT NULL,
    fullname varchar(60)
)

INSERT INTO users(username, password, emai, phone, fullname)
 VALUES('TA111', 'hihihi', 'trunganh@gmail.com', '0980123456', 'Nguyen Trung Anh');
INSERT INTO users(username, password, emai, phone, fullname)
 VALUES('PP123', 'phuong123', 'phuong28@gmail.com', '0981111111', 'Pham Quoc Phuong');
INSERT INTO users(username, password, emai, phone, fullname)
 VALUES('Hai98', 'haillllllll', 'tranhai@gmail.com', '0982222222', 'Tran Dang Hai');
INSERT INTO users(username, password, emai, phone, fullname)
 VALUES('TA222', 'tuananh98', 'tuananh@gmail.com', '0983333333', 'Nguyen Tuan Anh');
INSERT INTO users(username, password, emai, phone, fullname)
 VALUES('Huy123', 'huy123456', 'huy123@gmail.com', '0984444444', 'Nguyen Quang Huy'); 