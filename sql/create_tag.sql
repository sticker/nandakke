CREATE TABLE tag (
    tag_id INT(11) NOT NULL AUTO_INCREMENT,
    created DATETIME NOT NULL,
    modified DATETIME NOT NULL,
    status TINYINT NOT NULL,
    tag VARCHAR(64) NOT NULL,
    PRIMARY KEY (tag_id),
    UNIQUE KEY (tag),
    INDEX (created),
    INDEX (status),
    INDEX (tag_id)
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='あれなんだっけ - タグテーブル'
;
