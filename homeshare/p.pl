#!/usr/bin/perl
use Time::localtime;

open (OUT,"|/usr/sbin/sendmail -t");
print OUT "From: homeshare\@heaerie.com\n"; ## escape the @ or put in single quotes
print(OUT "Date: ".ctime()."\n");
print(OUT "To: homeshare\@heaerie.com\n");
print(OUT "Subject: sub\n");
print(OUT "\n");
print(OUT "from durai");
