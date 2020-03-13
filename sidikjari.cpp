#include <bits/stdc++.h>
using namespace std;

int main () {
	int arr[11] = {0};
	int isi[11] = {0};
	
	
	int n, m, iman;
	cin >> n >> m;
	
	for(int i=0; i<n; i++) {
		cin >> arr[i];
	}
	
	for(int i=0; i<m; i++) {
		cin >> isi[i];
	}
	
	for(int i=0; i<n; i++) {
		for(int j=0; j<m; j++) {
			if(arr[i] == isi[j]) {
				cout << arr[i] << " ";
				break;
			}
		}
	}
	
	
	cout << endl;
}
