CREATE TABLE are (
    are_id INT(11) NOT NULL AUTO_INCREMENT,
    created DATETIME NOT NULL,
    modified DATETIME NOT NULL,
    status TINYINT NOT NULL,
    question TEXT,
    answer TEXT,
    description VARCHAR(2083),
    description_type TINYINT,
    category_1 VARCHAR(32),
    category_2 VARCHAR(32),
    category_3 VARCHAR(32),
    age TINYINT,
    difficulty TINYINT,
    popularity SMALLINT,
    PRIMARY KEY (are_id),
    INDEX (created),
    INDEX (status),
    INDEX (category_1,category_2,category_3)
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='あれなんだっけ - あれテーブル'
;
