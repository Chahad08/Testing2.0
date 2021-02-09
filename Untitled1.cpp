#include<iostream>
using namespace std;
int main()
{
  int i,cp,n,j,p,count=0;

  cout<<"Size of array: "<<endl;
  cin>>n;
  int arr[n];
  cout<<"enter: " << endl;
  for(p=0;p<n;p++)
  {
      cin>> arr[p];
  }

  for(i=0;i<n;i++)
  {
      for(j=i+1;j<n;i++)
        {
        if(arr[i]==arr[j+1])
           {
            count++;
           }
        }
  }

  cout<<"copy:  " << count;
}
