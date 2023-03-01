import argparse
import base64
 
parser = argparse.ArgumentParser()
parser.add_argument("-v", "--verbose", help="Mostrar información de depuración", action="store_true")
parser.add_argument("-f", "--file", help="Nombre de archivo a procesar")
args = parser.parse_args()
 
# Aquí procesamos lo que se tiene que hacer con cada argumento
if args.verbose:
    print("depuración activada!!!")
 
if args.file:
    print("El nombre de archivo a procesar es: ", args.file)
    path_file = args.file
    with open(path_file, 'rb') as file_reader:
        document = file_reader.read()
    encoded_byter = base64.b64encode(document)
    encoded_string  = encoded_byter.decode('utf-8')
    with open("document_convert.txt", 'w') as file_writer:
        file_writer.write(encoded_string)