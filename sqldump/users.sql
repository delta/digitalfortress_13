GRANT USAGE ON *.* TO 'digitalfortress'@'localhost' IDENTIFIED BY PASSWORD '*41A1AC00C2CCBBE5DE88673C590BD4BA7016E2EC';

GRANT SELECT, INSERT, UPDATE ON `digitalfortress`.* TO 'digitalfortress'@'localhost';


GRANT USAGE ON *.* TO 'task1'@'localhost' IDENTIFIED BY PASSWORD '*B6D6FDD1B5C0612D7AC2358D45EF213803DF1730';

GRANT SELECT ON `digitalfortress`.* TO 'task1'@'localhost';

GRANT SELECT ON `digitalfortress`.`task1` TO 'task1'@'localhost';

