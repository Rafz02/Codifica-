select sum(valor_noite * noites) as total_recebido
from reservas
where deletado_em is null;