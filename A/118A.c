/*
 * codeforces.ru
 * problem: 118A - String Task
 */

#include <stdio.h>

int main ()
{
/* initialize */
     char input[100],output[100];
     int c,d ;
/* read input */
     scanf("%s", &input);
/* set all chars to lowercase */
     for (c=0;c<100;c++)
     {
	  if (input[c]=='\0')
	       break;
	  if (input[c]<97)
	       input[c]+=32;
     }
/* delete the vowels */
     for (c=0,d=0;c<100;c++)
     {

	  if (input[c]=='\0')
	       break;
	  if (input[c]=='a' || input[c]=='o' ||input[c]=='y' ||input[c]=='e' ||input[c]=='u' || input[c]=='i')
	       continue;
	  output[d]=input[c];
	  d++;   
}
     output[d]='\0';
/* plant the '.' cgaracter */
     for (c=0;c<100;c++)
     {
	  if (output[c]=='\0')
	       break;
printf(".%c",output[c]);
     }
	    return 0;
	    }   
