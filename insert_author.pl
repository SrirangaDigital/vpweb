#!/usr/bin/perl

$host = $ARGV[0];
$usr = $ARGV[1];
$pwd = $ARGV[2];
$db = $ARGV[3];

use DBI();

open(DATA,"<:utf8","vp.xml") or die ("cannot open vp.xml");

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd") or die $DBI::errstr;
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('set names utf8');

$sth11=$dbh->prepare("CREATE TABLE author(authorname varchar(1000), salutation varchar(200), authid int(10) auto_increment, primary key(authid)) ENGINE=MyISAM character set utf8 collate utf8_general_ci;");
$sth11->execute() or die $DBI::errstr;
$sth11->finish(); 

$line=<DATA>;

while($line)
{

	chop($line);
	if($line =~ /<author salut="(.*)">(.*)<\/author>/)
	{
		$salutation = $1;
		$author = $2;		
		if ($author ne "")
		{
			insert_author($author, $salutation);
		}
	}
	$line=<DATA>;
}

close(DATA);

$dbh->disconnect();

sub insert_author
{

	my($author, $salutation) = @_;
	
	$sth=$dbh->prepare("select authid from author where	authorname='$author' and salutation='$salutation'");
	$sth->execute() or die $DBI::errstr;

	my $ref=$sth->fetchrow_hashref();
	if($sth->rows()==0)
	{
		$sth1=$dbh->prepare("insert into author	values('$author','$salutation',null)");
		$sth1->execute() or die $DBI::errstr;
		$sth1->finish();
	}		
	
	$sth->finish();
	return(0);	
}
