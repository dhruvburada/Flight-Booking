-- Create Flight Table
CREATE TABLE Flight (
    FlightID INT AUTO_INCREMENT PRIMARY KEY,
    Source VARCHAR(100) NOT NULL,
    Destination VARCHAR(100) NOT NULL,
    DepartureDate DATE NOT NULL,
    DepartureTime TIME NOT NULL,
    FlightCostPerPerson DECIMAL(10, 2) NOT NULL
);

-- Create User Table
CREATE TABLE User (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(50) NOT NULL
);

-- Create Customer Table
CREATE TABLE Customer (
    UserID INT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Nationality VARCHAR(50) NOT NULL,
    Age INT NOT NULL CHECK (Age > 0),
    Country VARCHAR(50) NOT NULL,
    State VARCHAR(50),
    City VARCHAR(50),
    PostalCode VARCHAR(20),
    Email VARCHAR(100) NOT NULL UNIQUE,
    Phone VARCHAR(20) NOT NULL,
    PROFILE_PIC VARCHAR(50) DEFAULT 'profile.png',
    FOREIGN KEY (UserID) REFERENCES User(UserID)
);

-- Create Additional Traveler Table
CREATE TABLE AdditionalTraveler (
    AdditionalTravelerID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Age INT NOT NULL CHECK (Age > 0),
    Nationality VARCHAR(50) NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES Customer(UserID)
);

-- Create Order Table
CREATE TABLE `Order` (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    OrderAmount DECIMAL(10, 2) NOT NULL,
    CustomerID INT,
    FlightID INT,
    PaymentScreenshotFile VARCHAR(255) NOT NULL,
    PaymentStatus ENUM('Pending', 'Paid', 'Cancelled') NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES Customer(UserID),
    FOREIGN KEY (FlightID) REFERENCES Flight(FlightID)
);

-- Create Discount Coupon Table
CREATE TABLE DiscountCoupon (
    CouponID INT AUTO_INCREMENT PRIMARY KEY,
    CouponCode VARCHAR(20) NOT NULL UNIQUE,
    DiscountAmount DECIMAL(5, 2) NOT NULL,
    ExpiryDate DATE NOT NULL,
    UsageLimit INT NOT NULL DEFAULT 1
);

-- Create Reward Point Table
CREATE TABLE RewardPoint (
    RewardID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    PointsEarned INT NOT NULL DEFAULT 0,
    PointsRedeemed INT NOT NULL DEFAULT 0,
    PointsBalance INT NOT NULL DEFAULT 0,
    FOREIGN KEY (CustomerID) REFERENCES Customer(UserID)
);

-- Create Admin Table
CREATE TABLE Admin (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL
);

-- Insert demo data into User Table
INSERT INTO User (Email, Password) VALUES 
('demo1@mail.com', 'Demo@1111'),
('demo2@mail.com', 'Demo@2222'),
('demo3@mail.com','Demo@3333'),
('demo4@mail.com', 'Demo@4444'),
('demo5@mail.com','Demo@5555');

-- Insert demo data into Flight Table
INSERT INTO Flight (Source, Destination, DepartureDate, DepartureTime, FlightCostPerPerson) VALUES
('Mumbai', 'Delhi', '2024-03-15', '08:00:00', 3000.00),
('Bangalore', 'Kolkata', '2024-03-16', '10:30:00', 2500.00),
('Chennai', 'Hyderabad', '2024-03-17', '12:45:00', 2000.00),
('Jaipur', 'Ahmedabad', '2024-03-18', '14:20:00', 1800.00),
('Lucknow', 'Patna', '2024-03-19', '16:00:00', 2200.00);

-- Insert demo data into Customer Table
INSERT INTO Customer (UserID, FirstName, LastName, Nationality, Age, Country, State, City, PostalCode, Email, Phone) VALUES
(1, 'Dhruv', 'Burada', 'India', 18, 'India', 'Gujarat', 'Rajkot', '360311', 'dburada367@rku.ac.in', '8488997323'),
(2, 'Archil', 'Gajera', 'India', 25, 'India', 'Gujarat', 'Ahmedabad', '380001', 'agajera@rku.ac.in', '9876543211'),
(3, 'Paul', 'Lawrence', 'India', 35, 'India', 'Delhi', 'Delhi', '110001', 'paul@rku.ac.in', '9876543212'),
(4, 'Mayur', 'Rogheliya', 'India', 28, 'India', 'Uttar Pradesh', 'Lucknow', '226001', 'mayur@rku.ac.in', '9876543213'),
(5, 'Brijesh', 'Sakhiya', 'India', 27, 'India', 'Telangana', 'Hyderabad', '500001', 'brijesh@rku.ac.in', '9876543214');

-- Insert demo data into AdditionalTraveler Table
INSERT INTO AdditionalTraveler (CustomerID, FirstName, LastName, Age, Nationality) VALUES
(1, 'Aarav', 'Joshi', 28, 'India'),
(3, 'Riya', 'Verma', 32, 'India'),
(4, 'Rahul', 'Yadav', 30, 'India'),
(5, 'Priya', 'Sharma', 26, 'India'),
(2, 'Aryan', 'Gupta', 22, 'India');

-- Insert demo data into Order Table
INSERT INTO `Order` (OrderAmount, CustomerID, FlightID, PaymentScreenshotFile, PaymentStatus) VALUES
(9000.00, 1, 1, 'payment1.png', 'Paid'),
(7500.00, 2, 2, 'payment2.png', 'Paid'),
(6000.00, 3, 3, 'payment3.png', 'Pending'),
(7200.00, 4, 4, 'payment4.png', 'Paid'),
(11000.00, 5, 5, 'payment5.png', 'Cancelled');

-- Insert demo data into DiscountCoupon Table
INSERT INTO DiscountCoupon (CouponCode, DiscountAmount, ExpiryDate, UsageLimit) VALUES
('SAVE10', 10.00, '2024-12-31', 100),
('FLY50', 50.00, '2024-06-30', 50),
('HOLIDAY25', 25.00, '2024-08-31', 75),
('SPECIAL20', 20.00, '2024-10-31', 200),
('TRAVEL15', 15.00, '2024-09-30', 150);

-- Insert demo data into RewardPoint Table
INSERT INTO RewardPoint (CustomerID, PointsEarned, PointsRedeemed, PointsBalance) VALUES
(1, 100, 50, 50),
(2, 150, 0, 150),
(3, 200, 100, 100),
(4, 300, 200, 100),
(5, 250, 50, 200);

-- Insert demo data into Admin Table
INSERT INTO Admin (Username, Password) VALUES
('dhruvburada', 'Dhruv@8488'),
('paullawrence', 'Paul@111'),
('archilgajera', 'Archil@222');


COMMIT;
