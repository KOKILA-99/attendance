#include<stdio.h>
int amount=55000
void main()
{
int choice;
printf("1.check balance\n 2.cash withdrawal\n 3.cash deposit");
scanf("%d",&choice);
switch(choice)
{
   case 1:
   checkbalance();
   break;
   case 2:
   cashwithdrawal();
   break;
   case 3:
   deposit();
   break;
   default:
   printf("enter the correct choice");
   break;
}
 
void checkbalance()
{
printf("the balance amount is %d",amount);
}

void cashwithdrawal()
{
int n;
printf("enter the amount to be withdrawn");
scanf("%d",&n);
amount=amount-n;
if(amount<0)
printf("your amount is too low to be withdrawn");
else
printf("amount withdrawn successfully\n");
chechbalance();
}

void deposit()
{
int n;
printf("enter the amount to be deposited");
scanf("%d",&n);
amount=amount+n;
checkbalance();
}
