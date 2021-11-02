import numpy as np
import pandas as pd
import sys


df = pd.read_csv('https://raw.githubusercontent.com/ChrisFodor333/early_warning/main/assets/machine.csv',header = 0);
df = df.dropna();

#df.head(20);
from sklearn.model_selection import train_test_split

data = df
X = data[['altman', 'in05', 'quicktest','bonity','taffler','binkert']]
y = data['result']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2)

pd.options.mode.chained_assignment = None

from sklearn.preprocessing import LabelEncoder
labelencoder = LabelEncoder()
data["result"] = labelencoder.fit_transform(data["result"])
type = pd.DataFrame({'result': ['No Financial Distress', 'First Degree Financial Distress	', 'Second Degree Financial Distress', 'Third Degree Financial Distress']})

def create_dummies(df,column_name):
    dummies = pd.get_dummies(df[column_name],prefix=column_name)
    df = pd.concat([df,dummies],axis=1)
    return df


data = create_dummies(data,"result")

# Aby nevypísal warningy
import warnings
from sklearn.exceptions import DataConversionWarning
warnings.filterwarnings(action='ignore', category=DataConversionWarning)

# Vlastnosti pred strednou normalizáciou
vlastnosti_pred = X_train

# Stredná normalizácia pre rýchlejší classifier
from sklearn.preprocessing import StandardScaler
sc = StandardScaler()



#Transformácia dát
X_train_array = sc.fit_transform(X_train.values)

# Priradím škálované údaje do DataFrame a použijem argumenty indexu a stĺpcov, aby som zachoval svoje pôvodné indexy a názvy stĺpcov:
X_train = pd.DataFrame(X_train_array, index=X_train.index, columns=X_train.columns)

# Vycentrované testovacie dáta na trénovacích dátach
X_test_array = sc.transform(X_test.values)
X_test = pd.DataFrame(X_test_array, index=X_test.index, columns=X_test.columns)

# import modelu MLP
from sklearn.neural_network import MLPClassifier
# Inicializovanie perceptrónu
mlp = MLPClassifier(hidden_layer_sizes =(100,),solver='adam',learning_rate_init= 0.01, max_iter=500)

# Natrénovať model
mlp.fit(X_train, y_train)

# Výstupy
MLPClassifier (activation='relu', alpha=0.0001, batch_size='auto', beta_1=0.9,
beta_2=0.999, early_stopping=False, epsilon=1e-08,
hidden_layer_sizes=10, learning_rate='constant',
learning_rate_init=0.01, max_iter=1000, momentum=0.9,
nesterovs_momentum=True, power_t=0.5, random_state=None,
shuffle=True, solver='adam', tol=0.0001, validation_fraction=0.1,
verbose=False, warm_start=False)

altman = sys.argv[1]
in05 = sys.argv[2]
qt = sys.argv[3]
bonity = sys.argv[4]
taffler = sys.argv[5]
binkert = sys.argv[6]

X_test = [[altman, in05, qt, bonity, taffler, binkert]];
X_test  = np.array(X_test);
X_test.reshape(1, -1);
mlp.predict(X_test)

mlp.predict_proba(X_test)*100

print(mlp.predict(X_test),mlp.predict_proba(X_test)*100);
