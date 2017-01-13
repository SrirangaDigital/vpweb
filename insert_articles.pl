#!/usr/bin/perl

$host = $ARGV[0];
$usr = $ARGV[1];
$pwd = $ARGV[2];
$db = $ARGV[3];

@record=();
use DBI();

open(DATA,"<:utf8","vp.xml") or die("cannot open vp.xml");

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd") or die $DBI::errstr;
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('set names utf8');

$sth11=$dbh->prepare("CREATE TABLE article(theme varchar(150), title varchar(300), feature varchar(100), text varchar(1000), authid int(10), volume varchar(50), year varchar(50), month varchar(250), issue varchar(5), page int(5)) ENGINE=MyISAM character set utf8 collate utf8_general_ci;");
$sth11->execute() or die $DBI::errstr;
$sth11->finish(); 

$line=<DATA>;

while($line)
{

	chop($line);
	
	if($line =~ /<volume vnum="(.*)">/)
	{
		$volume = $1;
	}
	elsif($line =~ /<issue inum="(.*)" month="(.*)" year="(.*)" theme="(.*)">/)
	{
		$issue = $1;
		$month = $2;
		$year = $3;
		$theme = $4;
	}
	
	elsif($line =~ /<title>(.*)<\/title>/)
	{
		$title = $1;
	}
	elsif($line =~ /<feature>(.*)<\/feature>/)
	{
		$feature = $1;
	}
	elsif($line =~ /<page>(.*)<\/page>/)
	{
		$page = $1;		
	}
	elsif($line =~ /<text>(.*)<\/text>/)
	{
		$text = $1;		
	}
	elsif($line =~ /<author salut="(.*)">(.*)<\/author>/)
	{
		$salutation = $1;
		$author = $2;
	}
	elsif($line =~ /<\/entry>/)
	{
		insert_list($volume, $issue, $year, $month, $title, $author, $page, $feature, $salutation,$text,$theme);
	}
	
	$line = <DATA>;
}	

close(DATA);

sub insert_list
{
	my ($volume, $issue, $year, $month, $title, $author, $page, $feature, $salutation, $text, $theme)=@_;

	$title =~ s/'/\\'/g;
	$title =~ s/`/\\`/g;
	
	$author =~ s/'/\\'/g;
	$author =~ s/`/\\`/g;	
	
	$text =~ s/'/\\'/g;
	$text =~ s/`/\\`/g;

	if($author ne "")
	{
		$sth=$dbh->prepare("select authid from author where authorname='$author' and salutation='$salutation'");
		$sth->execute() or die $DBI::errstr;
			
		my $ref = $sth->fetchrow_hashref();
		
		$authid = $ref->{'authid'};
		$sth->finish();
	}
	else
	{
		$authid = 0;
	}
		
	$sth1=$dbh->prepare("insert into article values('$theme','$title','$feature','$text','$authid','$volume','$year','$month','$issue','$page')");
	$sth1->execute() or die $DBI::errstr;
	$sth1->finish();
}
$dbh->disconnect();
