set path=C:\Program Files (x86)\PostgreSQL\9.2\bin\
call pg_dump -p 5433 -U postgres "thuadat_dongnai_v4" > "D:\websvr\xampp\dothanhlong.org\tools\postgresql_tool\out\thuadat_dongnai_v4.sql"
pause