#
/<\/DESCRIPTION>/,/<INFO/{
/<INFO/i\
<br>
/<TABLE /a\
<tr>
/<DATA>/i\
<\/tr>
}
#
/TD>http/{
s/TD>http/TD>[<a href="http/g
s/<\/TD>/">Link to File<\/a>]<\/TD>/g
}
#
/TD>ftp/{
s/TD>ftp/TD>[<a href="ftp/g
s/<\/TD>/">Link to File<\/a>]<\/TD>/g
}
