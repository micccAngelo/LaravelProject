<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Beverages', function(){
//     $arrType = ['Boba', 'Tea', 'Coffee'];
//     $arrDrink = ['Milk Tea Boba', 'Matcha Tea', 'Coffee Boba'];
//     $arrDesc = ['Milk tea is very classic for boba tea (bubble tea). Boba is simply tapioca pears, nicely chewy texture and very fun to eat! You can use espresso or matcha green tea instead of black tea, would be very delicious!.', 'Finely ground and stone-ground matcha leaves make matcha, a type of green tea. Some people prefer to use a blender or food processor instead of whisking hot water and matcha powder together.', 'iced coffee is a cold version of your favourite coffee, but it is not simply a coffee that has been left to cool. Like a regular coffee, it is usually a combination of hot espresso and milk. However, ice is added too.'];
//     $arrImg = ['https://cdnimg.webstaurantstore.com/uploads/blog/2019/8/bubble1.jpg', 'data:image/jpeg;base64,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','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRUVFhUYGRgYGBUVEhgYFREYEhgYGBgZGRgUGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QGhISHjQkJCE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EADwQAAIBAgUCAwUHAgUEAwAAAAECAAMRBBIhMUEFUSJhcRMygZGhFEJSscHR8AbhFWJygvGSorPCIzNT/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAIhEBAQEBAAMBAQACAwEAAAAAAAERAhIhMQNRE0FhcZEy/9oADAMBAAIRAxEAPwD2Ps5wWYCdYY7gx7DdTB3gamWQaYi6Y9TzD/aU7wINESj4YQntlPInF17wFGwwEhaMaKqeZKoJAuKAnOlo0EHecUB5gZxWVKGaJw8o1OAkB5SpW/EcZPKUCWgLWk5RDuhJ0lvs8AOwgmLRpqcgUjAWteSMPfaHalHOlUrv6AkesAeHwajcXb6CMJhkH3RBB2VmBGtzeSa9oEVqCHi0Qr4S2o1EPWxEVOMtMinsvKGSjBnHr2kjHrLqOqoeIuuEYnWaFIZ9iJL4Z1F7XHlKFkoAShGsk1JW8ou1hKlhBlCZdKMCcwnSfYToB/sqHiUOAXiOKBIJEikzgBxIfp9+THhaWDCUZyYAj7xhRhz3jbOJCkyBdaZHMLTlme0pmvAJr3g62YDSSZwzSaADGMuhEbTEC1zK5L7gSKuVRc7DsPpGgv2hZxdeTEWroNww+Bt8xDvQDC+tu4IidS/Fss+mPboOYvUx6iBGFUct9Jf7On8EajjjAYWlWvKDCrwIRVtxGjn1kUnZGDLuP5adnkGVGxnp1tfcfkRHE4IfjHxEY6RhiWzHbYR7GYYEbQrzR6aXJAqLp3BmbiemuDYOjfEibQw/jtFMQmVjM6rBqYKuNcl/QgxOpWdD4lZfUET0YYw61AwyuoYcggGQYOD6kRbWep6d1G4tffeYOM/p5W8dBsp/A23wPEFgKdZHCOjDz4+c1Eb/AFCkqnNwZeiFI0WFrIWAv/LQaGUcaSc6Tmphf0nKcxyyqm11PB0hFMk6FyzpRYUZGSTnMsjd4VVlgmSNqbyjpCaVWFVpIpSfZ2kA2S8slOFRPnH1o5FzG3Jv5j+/Ez11jUmlUwTkZrBf9ZJP/SP3hcWURQOfLeJ4zG1ybZCgt79wTsbacTxrJXNRC5qOpO3tSt99Cbg35AA4tPN3+1+R25/L/dezpYhACWXNyLHjzHEXxmKDoQEsoIJOnBv+kxMLVrIEDozIw1axuGG4176fWHwKVWYhksjXNgB8DvpbftpOd/Tq+q3/AI5PbfTDjIPEq7aCLvhygJVzvcjiZBxTqAh3UaG4BtrYEX+vlBDFuxy6kn0I9LXl/wAkz1E8L/Ty42oTlK6+gsfjJ6vjnoqhKizEhjZrBt8pO1/2MYwNLVWN98tgL2N+e0D1XpZaoGZrquqr9zfkW1JvE76z0ePOk8P1Wo1iKYt3vb8zG6fWLMFemR22KmdRw4VhfLa+o3vfi52lMRhywa1h+G2p+sT9Op8peeb/AKarKjrnp7X1XXMPTuIXBYfOfLk/pMrABk13/mh0m5QxYQe0A0uBXUf+RR3HPcTvx+u/XHrjPjZpIFFhIqjSMIgIvffUdrQOJQAbzuwyRSu8yOpU/FN+ivvGYuOF3kqknpWAlFSN4hZWgukmDqaGO0GMqixmigmkUddItUQ32jziDqOFGsYFsOlruYqdfibx9qmeyLoOZSphLbRArOhcvlOlRYLJKyGcTkMCQLTixlgRJIgDDGQXPaFAnZYBcCMzelvqbRbqePs1gbAEgb3t3A/WN4M+Jh3H6/3mB1RArHOGJvZTfw2LE3PfYD4+U8n72x3/ABkq9TFo2xZhzo2nF+3MTQ+NSdBccamx20hamLyKUAHGnH0mdi8YFRbKAwHiOtyeSJ5b09E5r0eIIyZbluVLHxAg6D9JhNjXViL9++/6xrpeK9tQJPvKddtiL3+d4hihZiSNdpOuvaczNlGdy+t9fhaHNPMAM1j4rWLA7CwsN9pkIxvf07xmniCvM1pY3Uq5CTfw2so/zE63t8Nb8wH2pSyi/um6k3IBOh0vqJmNiidz/wAcRZULump0YMNrGx212i3UkepxGGb2TVFIHiUjMo8IJC66+d7xDqS5GUI5Zit730uCPFYG1iLi2sfpYxURkdmO7Mu5y6EAXAtwbee88njaZp1GVTcAnK25tx8bHaa6kz0nP322KHVQujpp3B289o1gcddyD7rXHlYzAwwZ2CDc/WbuA6a1O7OwIsMijU3JIA+knPlbP+F68ZK9d0KsWoID90lb+Q1X6EfKXxTyOlU8lBRySxPrf+1oKr4mAn0ef/mPJfq/up6zEtmebPUHsLdhMfCi5JlQPEiVoiWxJ1kUZlTCRimYukMhmkGcTLxVAs4mpxBuOYwMYPBBV8+Zd6BG0ihX7xtWBmkZuTykzR9mJ0DzRBkLeXZuJGSQcpnZjKItoaAN6pEla8oacj2cg0MGQzW7gycbgRWW/wB6xUi9hmBtmHnp9YDp4tUX4/kZr1FtfTQ7jvOfcl+t82z48RiunENZmsbbFdfnz62mfiOmMTYOhsfHfMulr28tLz3tZEYZWXOL82zL8d5iYrp1iSjkeTDT4MJ4+/yz57ern9f6yuiYNqWdiyEOBlykkaXIN+RYwWNpkn8ye0dahVH3bgblfEIuhLCzrl1I0JvbvfgzleLL7mNeW+3l8Z1YIxVFuVNiSdLjtBU+rgkBlAuRc8abXjX9T9MCMHQaNfNYbGYNDBu7ZUUknTYW+u06YbHq6K3vbc2udLnexEaw9MoQe22nzJ+sX6dhhh1Vaj6gHUI5A8rr5GaODrK+YU0awsM59634gDp27x4230zaYesrFXca5bak2I3tbaI1KQdi9zdvFYMLEnc3tzp856Po9NmBDj7rBVJuwzKVufneLf4Tk1ZxcHax00411+Ilv59ZLGZ1NxndPwRzqUQltxuSO97aT0tGkVsW965Fu1v1memLSiLLq7aE3Jb+cw1OqxBY73H95viSev8AbHe3238M/gH+78zIw+rX7Ty2M6kmG/8Ake9r5QFsWJI0NibRvp39Q4aoPBVCt+Fro310M9XN2OVmNTqVTeJ4X3SZbE3caEH84Kk1klQCu2svSMXqPrC0TpLA0phkMWV5bPKhoPxKZtILPJV4gKrWhkqxX2kjPNI0vtEmZvtJ0BXNaWDyjgwZY9oDAIk6RcmXUecgMGEkkQNpBgM4dxnX1E2Ku0wKB8a/6h+c3qkx01yzsQ9pn1MVbzmriaNxpMDGIdgNZ5+tlducrv8AEVAK7XNzoB6bS6dUTsp9T+8x8SPnM5wOZjzrfhHqkx1EixRd7m+Uzji6Ib/60tbQgKLm+1p5VbcCXU+cxf0q+Eeip4tArWVc3iylrELfb+ecmr1FsiqBcgWJGgJmJTqa2mjTa3E1z11jPXM070rEOCxbnnSBx1YknWSjGAxB1Ppaau2JMlJpq15s4eobFfj85lUyEIvuf0j1GsMwA3OsvHOezq623waNTAdFYMAWzKGvf1mJiP6PwzqWTNTbujEp8VP6Wnq3p2UDyA+kUpDRhPTmODymAp1sKbE+1pD3st86D8Vtx6i47z0roHQOhzKwurf+rdjM3EEh7gkEagjcR3p1ULdlGhF6tMDwsOaiDhhyvPES76MxlOTcg6HmERppdXwgFnU3Btr3B2MzQsnyqMrS3tIAmVJliGPaSfaRMtI9pNRk97SdniPtpJxIHMuh3POmf9tEmTYY1Q95DiBWpCZxNCuWWCyVcSzOBIBsJR9IYQTC8gouhB8xPS1J57IO89CNVHoPymemoCRM7E0xe/M03ESxAmKsYGPog378Tz1amc09TiBuZh1U8U49c67c9YTWmwEItG53j5UWgEp2Mk4i+TsNQsbt8P3jyvFwZdzpLk5npN0YVIpiMRkUudtgOSe0uzbCNnCKyhWF7fnJPa/GBgA7szt8JrdDw5LZ25Nh84/SwqroBpGsMtmUeY/Oak+M9dbr0yEMLGJPRytpzCZ5TOb33nqcGNjqRDQYJWxG41Ed6o99bGI13Fhb8pzsaErYkmw+B7WP/N4szgStY2CHuLfI6Qq4Llj8It0AzXnRgqq8X9YF6/oJZ1IYGymCaFaoZUtHlTAHJi+Q3MfuCIJUGsypbLJjWUSIGwygQe8qau9xC0ypGuk7OaQgnez1hQB3iOP6ilMhdWc7Ko+pPAihwrYbygWASozcQoPeY8msFVrbTbw7XRT5CedasBNvpz5qan1HyMxepuNSehqkRrx2pEa5kozMSu8yqlLW82K5mfiDM2rCViIKpUtCYgkRQKWMlbXWrGkN7Tz/AFw1gFWipNzZiN5t9IpuKaioQWsL2iz0aapp4rx5DF1WMIJnMXRby2Hbxr6iCLSiVLMD2IMb7iZ6ehLSuaLDFqdbj5wNXGIFPjG3cT1a4GatZRuYjUxAJsAJ56r1UhrXzEnQLqfidhNHAVPDnewGpHYdz5zn5WtZguPbxovqx9B/eQ1a/MR+1hnZzzYDuFGw/U+srV6ii6Ztew1Pyk3Vw2z3g25MAMbfZHPwt+cG9WpsKencsIDWXzkb/wA+sRrU8QdggHrOTp7bvUJPYaD0gOGug+8ItieooDob32t3l16Ug139SYUYVABZR8pQl9vb8BnRzMPL5zoGz7HvrLexA5MVpdQY/dl2x1zltrtOzmuykHVtOBBNRAN7CWqm7ektXbSY6aiWxQAtbWKVcTF3OsC083XVvqO3PMn1apWJnp/6de9EA8M35zytp6L+nH8DL/mv9JOZZdq9XZjXcxOuYw5ilZp01zxn14jVN47iGmfWO8za1AasCqiS7QJqAbyaplFjFOK03vGFaTQwplw0AGkl41cEZ5CsCYszxdKpzb8ST3Sz00XwtJmAditxctlJW54mf1JqdJzT9m7Ai6VUBem3pkDEHixA2k+3IMlsXaemZJjjfbIoBlYmooRPuA3zt/qXc+hI9JHUupM9lBsotp3ttf8AaHxbh9xMPqKZb8k7eUz03zi9bHvcIu7X110Amx02ii22LfiO88nTrkMM/mL+veP1+o5FCj717Ececk/hXrKnUEp+8w9JVetUz+L5TxQq63JufPc+UItYjc2/mt5vGXr26slx73raBq9YA2QnTS+nwmBSxAvY/Xb5w1VTfy412jA7U6057L2G8C+Nc/eNteYoXP107es5anfUW/hlwV9s3c/OdK+z8pED6QmCRdrj4wtPDIGBtqOZBJtrv5GSo851cwHSzGRUFxG6iAjzG/7wAExYsrKqGLrvNbE4UMLjeZgQg2M4XnK6+WwVEmn0Z8rEd7GZ6wlKoVYMON/SXqevSS+3pXeJ4gyExAYAg8QFaqO85+Usb8cL12mfVO8ZrODfWZ+IeZtWQFzEcbgxUGUlgNL2NifKMu8hXklawaiMoAGw0Hwh1eKhoVWjTDKtLloujytWtaN9GOr1YthXuzRPF4qwMb6XT8NzudTNflPK7/Ge/XJkxWvHmWK1knoxxZ7ExDHnmatWnEayTOErGYA7ROqToDsNvKP18MUN125EDiFFr/WPje6EjDW51Gg7WjKkEHXWZCYoA2O19D2/tHlva9+N9P5/Pltk9fYHQana/EZptfw6nsObcW+Ur03CGoLk2Hfk76D+f23sPSRAFUWt89TrrJaM0YByLhG+IbaWqYVwPcPl4Zr1epInvNY9hctfsQJeh1XNqtNyOPCADGjC9mfwn/pM6eh/xJv/AMX/AO2dKNtH11v8YwAJASw19TFaeORyVsQR5Ts5malfLrYn0FzKNiEY2BsbXK7H4DkQHtbkj5Xvr6S709Ln3uO48wYzQWCxGHD+vBkisNBbU/dNgT3K+flzx5k/LgzneVlZRUqbGESaD0g4sfgYiUKGx+ExZjUulxijSOuqE6/5T+0ZeuGFwbylVLiY+Jwbp4qR05Q+7/tPE4d/jb75/wDHXnufOj1R4jVeIHq2uVwUbsefQ8yGxanYzz+56rrkvwdnkCrFjW84I1JrTGklSEFWZQxFoOp1FF3YS6Y2DWieLxYUE3mS3VGfRFJ8ztD4XAsxDObngfdHw5m+fy66+s9dTlfDU2qMHb3R7o7+Zno8GthFaNG0cpi09PPM5mRw66vV2iVDAMIVjKMJpks6xSqkfZYJ0jBkVUmF1SkRYDaeoqU4jicNmEmLrzo6ZfVvl+8qW9nofd7X1HmJquzaINGJsG4tAv05RqfEe53tJ/2rd6M6vTUrYi1iNb373nYys7OKabgDO2mg0B14IuPn8/N4fFnDPmU3U+8vf9jPY9CKVjUcG+ezg21sBYg9iDx+8YKYPpyJqfE5t4mF9eCOx1/KP0nI127/AM54jrUQo2Fzxe1u5/PSDVLHfXk8/LgcSDvbHt9J0FYfy86BvUalgQzAkdu0H9mDWZCV9ANe8KaUvcjad3NCpbcCSNZIJM7NaUVyd9ZD73H+4d/Mf5vzgsTWKi4y27G4PzlFqlh4eO4gNKBuNf5zB1kBHl6a/CK0qjhrhdDf2m+tl0t2OgF/nwQ4jhlDLse4II8iDqD5TFixnupQ2O3BlhYx11BFjEHQofKZzF0vjOmJUFioM85jP6W5QkehnrkeMAAy5L9NsfOH6DXHuv8AOAfpGJHf4T6W2HBlfYSf4+f4vn1/XzQdHrH3i31jWH6DbcX9Z9B9gO0q2FXtE4k+QvdryuH6cF4jtOhabRwq9pH2QS4ms9EhQukb+zSDQjE0nadljZoypoGMCRWDZY81HygmpS4az3SLOk1GpRd6UmDExWG5G41EWdGq2RdNLueR6TdejEzQyNnHxHcSWLKRfpKoNvO7EfzmJ4XFNRcPQDNr4gAcjDsf7T1+Fwa4nMze4PCi3IF7asfytC4vBIgJIUAHsAOTYD56fpMNG+ldQTEU8y+EgWdTbMnkfLzhKqXa3G/n2Pyt9fn5Zq9QNmoqRxnIyrqBYW5Hl+89F0jHmqhzqFfQkC5UgbMO2+2+um8oNkHN787ftOnPRe5sCBx4R+86QalCXPEmdPQ5q1JDc+k6dAzsTz8I3h9hOnTMHHeEp+//ALP1E6dLR0HV2M6dMqz6Ubpzp0A6y06dKiDOM6dAqZE6dAiQZE6BBkCdOgc0G0idAE0E86dAXaLV9pE6FNf08fE44uNON4v1XXEIDqMy6HUe92kzpjr61DmJpgEWAG3Amdg/eU85l9eJ06YqxvvvOnTppH//2Q=='];

//     return view('Beverages')
//     ->with('Type', $arrType)
//     ->with('img', $arrImg)
//     ->with('Boba', $arrDrink)
//     ->with('Desc', $arrDesc);
// });

Route::get('/Beverages', [MenuController::class, 'menu']);