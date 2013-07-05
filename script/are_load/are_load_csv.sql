LOAD DATA LOCAL INFILE 'are.csv' REPLACE
    INTO TABLE are
    FIELDS TERMINATED BY ','
    (`category_1`, `category_2`, `question`, `answer`)
    SET `created` = now(), `modified` = now(), `status` = 0
;
