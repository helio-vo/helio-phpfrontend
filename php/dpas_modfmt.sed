#  modify the return from DPAS including table style
#
/curl -s /d
/<VOTABLE/i\
<html><body>
/<\/VOTABLE/a\
<\/body><\/html>
s/<TABLE name/<TABLE border=1 rules=cols,rows cellpadding=2 cellspacing=0 name/g
#/<\/DESCRIPTION>/,/<INFO/{
#/<INFO/i\
#<br>
#/<TABLE /a\
#<tr>
#/<DATA>/i\
#<\/tr>
#}
#
#  try to tidy the return from the UOC - easier to do other stuff
#
s/<\/TR><TR>/%%%%%<\/TR><TR>%%%%%/g
#s/<\/RESOURCE><RESOURCE>/<\/RESOURCE>%%%%%<RESOURCE>/g
s/><RESOURCE/>%%%%%<RESOURCE/g
s/><\/RESOURCE>/>%%%%%<\/RESOURCE>/g
s/<\/RESOURCE>/<\/RESOURCE>%%%%%<br><p>/g
s/<RESOURCE/%%%%%<RESOURCE/g
s/><TABLE/>%%%%%<TABLE/g
s/DESCRIPTION><INFO/DESCRIPTION>%%%%%<INFO/g
s/TR><\/TABLEDATA>/TR>%%%%%<\/TABLEDATA>/
s/<\/TD><TD>/<\/TD>%%%%%<TD>/g
s/%%%%%/\
/g
#
#
/<RESOURCE>/,/<\/RESOURCE>/{
s/<\/INFO><INFO/<\/INFO> \&nbsp;\&nbsp; <INFO/g
#/TD>http/{
#s/TD>http/TD>[<a href="http/g
#s/<\/TD>/">Link to File<\/a>]<\/TD>/g
#}
/<FIELD/,/<\/FIELD/{
s/<DESCRIPTION>/<DESCRIPTION><td>/g
s/<\/DESCRIPTION>/<\/td><\/DESCRIPTION>/g
}
}
