-- SQL script to create the RALC and Cookies tables and insert Lorem ipsum data
-- Run this script in your MySQL database: trabalho_11

-- Create RALC table
CREATE TABLE IF NOT EXISTS ralc (
    id INT PRIMARY KEY AUTO_INCREMENT,
    texto TEXT NOT NULL
);

-- Create Cookies table 
CREATE TABLE IF NOT EXISTS cookies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    texto TEXT NOT NULL
);

-- Insert RALC Lorem ipsum texts (only if table is empty)
INSERT INTO ralc (texto) 
SELECT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
WHERE NOT EXISTS (SELECT 1 FROM ralc);

INSERT INTO ralc (texto) 
SELECT 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
WHERE NOT EXISTS (SELECT 1 FROM ralc WHERE id = 2);

INSERT INTO ralc (texto) 
SELECT 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'
WHERE NOT EXISTS (SELECT 1 FROM ralc WHERE id = 3);

-- Insert Cookies Lorem ipsum texts (only if table is empty)
INSERT INTO cookies (texto) 
SELECT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
WHERE NOT EXISTS (SELECT 1 FROM cookies);

INSERT INTO cookies (texto) 
SELECT 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
WHERE NOT EXISTS (SELECT 1 FROM cookies WHERE id = 2);

INSERT INTO cookies (texto) 
SELECT 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.'
WHERE NOT EXISTS (SELECT 1 FROM cookies WHERE id = 3);