select f_name, l_name , g.grp_id , i.usr_id , i.cur_b' at line 1
mysql> select f_name, l_name , g.grp_id , i.usr_id , i.cur_bal,i.Food_type from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id fromgid001tb si  where si.usr_id = 1 );

