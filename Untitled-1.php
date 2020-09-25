$userName=$POST("username")
select * from users where username="$userName"

sizeof($result)