#!/usr/bin/perl
#Run with perl palindrome.pl. Enter a string to check if it's a palindrome.
print "Enter a string: ";
my $str = <STDIN>;
chomp $str; # Removes the newline character.

$str = lc($str); # Makes the string lowercase.
$str =~ s/[^a-z0-9]//g; # Removes everything but numbers and letters. ^ is not.
#$str =~ s/ //g; # Removes all spaces.
#$str =~ s/[[:punct:]]//g; # Removes all punctuation.

my $reversed = reverse $str; # Reverses the string.
if ($str eq $reversed) {
    print "The string is a palindrome!\n";
} else {
    print "The string is not a palindrome.\n";
}
