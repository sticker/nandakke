CREATE TABLE tagmap (
    tagmap_id INT(11) NOT NULL AUTO_INCREMENT,
    created DATETIME NOT NULL,
    modified DATETIME NOT NULL,
    status TINYINT NOT NULL,
    are_id INT(11) NOT NULL,
    tag_id INT(11) NOT NULL,
    PRIMARY KEY (tagmap_id),
    FOREIGN KEY (are_id) REFERENCES are(are_id),
    FOREIGN KEY (tag_id) REFERENCES tag(tag_id),
    UNIQUE (are_id, tag_id),
    INDEX (created),
    INDEX (status)
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='あれなんだっけ - タグマップテーブル'
;
