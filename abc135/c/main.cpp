#include <bits/stdc++.h>
#include <unistd.h>
using namespace std;

int main()
{
    int n;
    cin >> n;
    vector<int> A(n + 1);
    for (int i = 0; i <= n; i++) {
        cin >> A.at(i);
    }
    vector<int> B(n);
    for (int i = 0; i < n; i++) {
        cin >> B.at(i);
    }

    vector<int> C(n);
    vector<int> D(n + 1);

    long long count = 0;
    for (int i = 0; i < n; i++) {
        if (i == 0) {
            C.at(0) = min(A.at(0), B.at(0));
        } else {
            C.at(i) = min(max(A.at(i) - D.at(i - 1), 0), B.at(i));
            
        }
        D.at(i) = min(A.at(i + 1), max(B.at(i) - C.at(i), 0));
        count += C.at(i) + D.at(i);
    }
    cout << count << endl;
    return 0;
}
