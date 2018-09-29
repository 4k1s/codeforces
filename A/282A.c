#include <stdio.h>

int main (void)
{
  int c,n,x=0;
  char instruction[4];

 
  /*read the number of lines */
scanf("%d\n", &n);

  /* read the instructions and compute X */
  for (c=0;c<n;c++)
    {
scanf("%4s\n", instruction);
 if (instruction[1]=='-')
   {
     x--;
   }
 else
{
  x++;
 }
    }

  printf("%d\n",x);
  return 0;
}
