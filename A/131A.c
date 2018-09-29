/*
 * codeforces.ru
 * problem: 131A - cAPS lΟCK
 */

#include <stdio.h>
#include <string.h>

#define DIFF 32
/* declarations */
void transform (char*,int) ;

int main ()
{
/* initialize */
     char word[101],current;
     int c=0 ;
    
/* read input */
     while((current=getchar())!=EOF)
     {
	  word[c]=current; c++;
	    
	  if (current=='\n')
	       c--;	       
     }
     transform(word,c);
     word[c]='\0';
     printf("%s\n",word);
     return 0;
}

void transform (char *word , int l)
{
     int c,flag ;
     if (l==1)
     {

	  if (word[0]>96)
	       word[0]-=DIFF;
	  else
	       word[0]+=DIFF;
	  return;
     }
     for (c=1,flag=0;c<l;c++)
     {
	  if (word[c]>96)
	       flag++;
     }
     if (flag)
	  return;
/* transform the word*/
     if (word[0]> 96)
	  word[0]-=DIFF;
     else
	  word[0]+=DIFF;
     for (c=1;c<l;c++)
     {
	  if (word[c]<97)
	       word[c]+=DIFF;
     }
     return;
}
