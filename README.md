# テーブル設計

## users テーブル

| Column             | Type       | Options                          |
| ------------------ | ---------- | -------------------------------- |
| nickname           | string     | null: false, unique: true        |
| email              | string     | null: false, unique: true        |
| encrypted_password | string     | null: false                      |
| age                | string     | null: false                      |
| blood              | string     | null: false                      |
| work               | string     | null: false                      |
| tell                  | string     | null: false                      |
| birthday           | date       | null: false                      |

### Association

- has_one  : profile
- has_many : rooms, through: room_users

### profile テーブル

| Column             | Type       | Options                          |
| ------------------ | ---------- | -------------------------------- |
| name               | string     | null: false                      |
| description        | text       | null: false                      |
| introduce          | string     | null: false                      |        
| hobby              | string     | null: false                       |

## Association

- belongs_to :user


### rooms　テーブル

| Column              | Type       | Options                          |
| ------------------  | ---------- | -------------------------------- |
| name                | string     | null: false                      |

## Association

- has_many : users, through: room_users
- has_many : user_rooms

## user_rooms テーブル

| Column  | Type         | Options                        |
| ------- | ------------ | ------------------------------ |
|  user   | references   | null: false, foreign_key: true |
|  room   | references   | null: false, foreign_key: true |

## Association

- belongs_to :user
- belongs_to :room
