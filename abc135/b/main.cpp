#include <bits/stdc++.h>
#include <unistd.h>
using namespace std;

int main()
{
    int n;
    cin >> n;
    vector<int> P(n);

    int count = 0;
    for (int i = 0; i < n; i++) {
        cin >> P.at(i);
        if (P.at(i) != i + 1)
            count++;
    }

    if (count > 2) {
        cout << "NO" << endl;
    } else {
        cout << "YES" << endl;
    }

    return 0;
}
