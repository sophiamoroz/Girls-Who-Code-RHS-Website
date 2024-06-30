CREATE TABLE rhsgwcdb (
	users_id bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
	users_uid nvarchar(150) NOT NULL DEFAULT '',
	users_pwd nvarchar(150) NOT NULL DEFAULT '',
	users_email nvarchar(320) NOT NULL DEFAULT ''
);

CREATE UNIQUE INDEX unique_user_id ON rhsgwcdb (`users_uid`);